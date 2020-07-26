<?php

declare(strict_types=1);

// $Id$
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <https://www.xoops.org>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
// Author: Kazumi Ono (AKA onokazu)                                          //
// URL: http://www.myweb.ne.jp/, https://www.xoops.org/, http://jp.xoops.org/ //
// Project: The XOOPS Project                                                //
// ------------------------------------------------------------------------- //
require_once XOOPS_ROOT_PATH . '/kernel/object.php';

/**
 * Class UmfrageLog
 */
class UmfrageLog extends XoopsObject
{
    public $db;

    // constructor

    /**
     * UmfrageLog constructor.
     * @param null $id
     */
    public function __construct($id = null)
    {
        $this->db = Database::getInstance();

        $this->initVar('log_id', XOBJ_DTYPE_INT, 0);

        $this->initVar('poll_id', XOBJ_DTYPE_INT, null, true);

        $this->initVar('option_id', XOBJ_DTYPE_INT, null, true);

        $this->initVar('ip', XOBJ_DTYPE_OTHER, null);

        $this->initVar('user_id', XOBJ_DTYPE_INT, 0);

        $this->initVar('time', XOBJ_DTYPE_INT, null);

        if (!empty($id)) {
            if (is_array($id)) {
                $this->assignVars($id);
            } else {
                $this->load((int)$id);
            }
        }
    }

    // public

    /**
     * @return false
     */
    public function store()
    {
        if (!$this->cleanVars()) {
            return false;
        }

        foreach ($this->cleanVars as $k => $v) {
            $$k = $v;
        }

        $log_id = $this->db->genId($this->db->prefix('umfrage_log') . '_log_id_seq');

        $sql = 'INSERT INTO ' . $this->db->prefix('umfrage_log') . " (log_id, poll_id, option_id, ip, user_id, time) VALUES ($log_id, $poll_id, $option_id, " . $this->db->quoteString($ip) . ", $user_id, " . time() . ')';

        $result = $this->db->query($sql);

        if (!$result) {
            $this->setErrors('Could not store log data in the database.');

            return false;
        }

        return $option_id;
    }

    // private

    /**
     * @param $id
     */
    public function load($id)
    {
        $sql = 'SELECT * FROM ' . $this->db->prefix('umfrage_log') . ' WHERE log_id=' . $id . '';

        $myrow = $this->db->fetchArray($this->db->query($sql));

        $this->assignVars($myrow);
    }

    // public

    /**
     * @return bool
     */
    public function delete()
    {
        $sql = sprintf('DELETE FROM %s WHERE log_id = %u', $this->db->prefix('umfrage_log'), $this->getVar('log_id'));

        if (!$this->db->query($sql)) {
            return false;
        }

        return true;
    }

    // public static

    /**
     * @param        $poll_id
     * @param string $orderby
     * @return array
     */
    public static function &getAllByPollId($poll_id, $orderby = 'time ASC')
    {
        $db = Database::getInstance();

        $ret = [];

        $sql = 'SELECT * FROM ' . $db->prefix('umfrage_log') . ' WHERE poll_id=' . (int)$poll_id . " ORDER BY $orderby";

        $result = $db->query($sql);

        while (($myrow = $db->fetchArray($result)) !== false) {
            $ret[] = new self($myrow);
        }

        //echo $sql;
        return $ret;
    }

    // public static

    /**
     * @param      $poll_id
     * @param      $ip
     * @param null $user_id
     * @return bool
     */
    public static function hasVoted($poll_id, $ip, $user_id = null)
    {
        global $xoopsModuleConfig;

        $db = Database::getInstance();

        $sql = 'SELECT COUNT(*) FROM ' . $db->prefix('umfrage_log') . ' WHERE poll_id=' . (int)$poll_id;

        // If Cookie exists, the user has already voted using this browser, although it could be using a different login
        if ($xoopsModuleConfig['controlbycookie'] == 1 and $_COOKIE['voted_polls[' . $poll_id . ']']) {
            return true;
        }

        // Logged in user? Look for his UID in the voting database.
        if (!empty($user_id)) {
            $sql .= ' AND user_id=' . (int)$user_id;
        }

        // ISegura.es: Can the user vote? Apply IP and Cookie controls if available.
        if ($xoopsModuleConfig['controlbyip'] == 1) { // ISegura.es: We check if IP control is activated.
            $sql .= " AND ip='" . $ip . "'";
        } elseif (!$user_id) { // If is anonymous, but IP is not activated, we have no other way to control he has already voted.
            return false;
        }

        [$count] = $db->fetchRow($db->query($sql));

        if ($count > 0) {
            return true;
        }

        return false;
    }

    // public static

    /**
     * @param $poll_id
     * @return bool
     */
    public static function deleteByPollId($poll_id)
    {
        $db =Database::getInstance();

        $sql = sprintf('DELETE FROM %s WHERE poll_id = %u', $db->prefix('umfrage_log'), (int)$poll_id);

        if (!$db->query($sql)) {
            return false;
        }

        return true;
    }

    // public static

    /**
     * @param $option_id
     * @return bool
     */
    public static function deleteByOptionId($option_id)
    {
        $db =Database::getInstance();

        $sql = sprintf('DELETE FROM %s WHERE option_id = %u', $db->prefix('umfrage_log'), (int)$option_id);

        if (!$db->query($sql)) {
            return false;
        }

        return true;
    }

    // public static

    /**
     * @param $poll_id
     * @return mixed
     */
    public static function getTotalVotersByPollId($poll_id)
    {
        $db =Database::getInstance();

        $sql = 'SELECT DISTINCT user_id FROM ' . $db->prefix('umfrage_log') . ' WHERE poll_id=' . (int)$poll_id . ' AND user_id > 0';

        $users = $db->getRowsNum($db->query($sql));

        $sql = 'SELECT DISTINCT ip FROM ' . $db->prefix('umfrage_log') . ' WHERE poll_id=' . (int)$poll_id . ' AND user_id=0';

        $anons = $db->getRowsNum($db->query($sql));

        return $users + $anons;
    }

    // public static

    /**
     * @param $poll_id
     * @return mixed
     */
    public static function getTotalVotesByPollId($poll_id)
    {
        $db =Database::getInstance();

        $sql = 'SELECT COUNT(*) FROM ' . $db->prefix('umfrage_log') . ' WHERE poll_id = ' . (int)$poll_id;

        [$votes] = $db->fetchRow($db->query($sql));

        return $votes;
    }

    // public static

    /**
     * @param $option_id
     * @return mixed
     */
    public static function getTotalVotesByOptionId($option_id)
    {
        $db =Database::getInstance();

        $sql = 'SELECT COUNT(*) FROM ' . $db->prefix('umfrage_log') . ' WHERE option_id = ' . (int)$option_id;

        [$votes] = $db->fetchRow($db->query($sql));

        return $votes;
    }
}
