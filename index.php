<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Info Here
 *
 * @package    students_management_interface
 * @copyright  2016 xCHAN
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(__FILE__) .'/../../config.php');
//require_once('lib.php');

$PAGE->requires->css('styles.css')

$PAGE->set_context(get_system_context());
$PAGE->set_pagelayout('managestudents');
$PAGE->set_title("Manage Students: Main Page");
$PAGE->set_heading("Manage Students");
$PAGE->set_url($CFG->wwwroot.'/local/moodle-manage_students/index.php');
//$PAGE->set_url($CFG->wwwroot.'moodle-manage_students/index.php');

$PAGE->navbar->ignore_active();

if (isloggedin() and !isguestuser()) {

    echo $OUTPUT->header();
    echo "Hello World";
    echo $OUTPUT->footer();

} else {

    redirect(new moodle_url('/login/index.php'));

}



?>
