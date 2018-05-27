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
 * English strings for mootyper
 *
 * @package    mod_mootyper
 * @copyright  2012 Jaka Luthar (jaka.luthar@gmail.com)
 * @copyright  2016 onwards AL Rachels (drachels@drachels.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allstring'] = '所有';
$string['average'] = '平均';
$string['bymootyper'] = 'by exercise';
$string['byuser'] = 'by user';
$string['cancel'] = '取消';
$string['charttitleallgrades'] = '全部成绩All Grades';
$string['charttitlemyowngrades'] = '我的成绩';
$string['chere'] = '单击开始';
$string['closebeforeopen'] = '无法更新MooTyper. You have specified a close date before the open date.';
$string['configdateformat'] = 'This defines how dates are shown in grade reports. The default value, "M d, Y G:i" is Month, day, year and 24 hour format time. Refer to Date in the PHP manual for more examples and predefined date constants.';
$string['configrequirepassword'] = 'Configure password';
$string['configpassword_desc'] = 'Whether a password is required in order to access the lesson.';
$string['configtimelimit_desc'] = 'If a time limit is set, a warning is displayed at the beginning of the lesson and there is a countdown timer. If set to zero, then there is no time limit.';
$string['continue'] = '继续';
$string['continuoustype'] = '继续打字';
$string['continuoustype_help'] = 'If enabled, a mistyped character does not have to be corrected.';
$string['countmistakes'] = '计数键盘敲击次数';
$string['countmistakes_help'] = 'If enabled, all keystrokes for the same mistake are added to the mistake total.';
$string['countmistypedspaces'] = '记录误触次数';
$string['countmistypedspaces_help'] = 'If enabled, a mistyped space is counted as a mistake.';
$string['course_exercises_viewed'] = 'Viewed exercises';
$string['csvexport'] = '导出到 .csv';
$string['cursorcolor_title'] = '光标颜色';
$string['cursorcolor_descr'] = 'This sets the cursor color of the next letter to type.';
$string['cursorcolor_colour'] = '#00ff00';
$string['cursorcolor'] = '光标颜色';
$string['cursorcolor_help'] = 'This sets the color around the typing cursor. You can enter a hex color or named color. e.g. #95fc89 or green';
$string['dateformat'] = '默认时间格式';
$string['defaultlayout'] = '默认键盘布局';
$string['defaultprecision'] = 'Default typing precision %';
$string['defaulttextalign'] = '文本对齐';
$string['defaulttextalign_help'] = 'Set text alignment while typing exercises to left, center, or right.';
$string['defaulteditalign'] = 'Edit text alignment';
$string['defaulteditalign_help'] = 'Set text alignment while editing exercises to left, center, or right.';
$string['defaulttextalign_left'] = '左对齐';
$string['defaulttextalign_center'] = '居中';
$string['defaulttextalign_right'] = '右对齐';
$string['defaulttextalign_warning'] = 'NOTE: Set alignment before typing!';
$string['export'] = '导出 ';
$string['exportconfirm'] = 'Confirm you want to export ';
$string['eaccess0'] = 'Any teacher';
$string['eaccess1'] = 'Teacher inside this course';
$string['eaccess2'] = '只有我';
$string['eaddnew'] = 'Add new exercise / category';
$string['editable'] = '可编辑';
$string['editexercises'] = 'Export / edit exercises';
$string['eeditlabel'] = '编辑';
$string['eheading'] = 'Manage MooTyper Exercises';
$string['emanage'] = 'To manage exercises and categories click here';
$string['emptypassword'] = 'Password cannot be empty';
$string['ename'] = '练习: ';
$string['endlesson'] = 'End of the category / lesson';
$string['enterpassword'] = 'Please enter the password:';
$string['eremove'] = '移除';
$string['etext'] = 'Text';
$string['etitle'] = 'MooTyper 练习';
$string['examdone'] = 'Exam already taken.';
$string['excategory'] = 'Exercises category';
$string['excategory_help'] = 'Pick a Lesson name to use for this MooTyper.';
$string['exercise'] = 'Exercise {$a} of ';
$string['exercise_added'] = 'Added exercise/category';
$string['exercise_edited'] = 'Edited exercise';
$string['exercise_removed'] = 'Removed an exercise';
$string['eventlessonexport'] = 'Exported lesson';
$string['failbgc_title'] = 'Failing grade background color';
$string['failbgc_descr'] = 'This sets the background color for a failing grade.';
$string['failbgc_colour'] = '#FF6C6C';
$string['fapply'] = '接受';
$string['fconfirm'] = '确认';
$string['fcontinue'] = '继续';
$string['fexercise'] = '练习';
$string['flesson'] = '课程';
$string['fmode'] = '模式';
$string['fmode_help'] = 'Lesson mode will present each exercise in a Lesson/Category until all are completed. Exam mode will show only the selected exercise for the exam. Once you click Save and display, you cannot change the mode.';
$string['fnewexercise'] = 'Exercise will be a part of';
$string['fnewlesson'] = '创建新课程/分类';
$string['fsecurity'] = '安全';
$string['fsettings'] = '设置';
$string['fsetup'] = '设置';
$string['fullhits'] = 'All hits';
$string['gradesfilename'] = 'grades.csv';
$string['grade_removed'] = '移除分数';
$string['gviewmode'] = '查看';
$string['hitsperminute'] = '次/分钟';
$string['invalidaccess'] = 'You do not have permission to view this page.';
$string['isexamtext'] = '考试';
$string['kblimportadd'] = ' layout was successfully added to the database.';
$string['kblimportnotadd'] = ' layout already in the database. Nothing to do.';
$string['keyboardbgc_title'] = 'Keyboard background color';
$string['keyboardbgc_descr'] = 'This sets the background color around keyboard keys.';
$string['keyboardbgc_colour'] = '#DDDDDD';
$string['keybdbgc'] = 'Keyboard background color';
$string['keybdbgc_help'] = 'This sets the background color around keyboard keys. You can enter a hex color or named color. e.g. #95fc89 or green';
$string['keytopbgc'] = 'Key top color';
$string['keytopbgc_help'] = 'This sets the color of key tops except homerow keys. You can enter a hex color or named color. e.g. #95fc89 or green';
$string['layout'] = 'Keyboard layout';
$string['layout_help'] = 'You can select a Keyboard layout to be shown when the Show keyboard option is set to Yes.';
$string['layout_imported'] = 'Keyboard layout imported';
$string['lesson_export'] = 'Lesson export setting';
$string['lesson_export_filename'] = 'Lesson export filename';
$string['lesson_export_filenameconfig'] = 'Add GMT as part of exported lesson filenames for simple versioning system.';
$string['lesson_exported'] = 'Exported lesson/category';
$string['lesson_imported'] = 'Imported lesson/category';
$string['lesson_removed'] = 'Removed a lesson and its exercises';
$string['loginfail'] = '登录失败，请重试...';
$string['lsnname'] = '分类名字';
$string['lsnimport'] = '导入课程/键盘布局';
$string['lsnimportadd'] = ' was successfully added to the database.';
$string['lsnimportnotadd'] = ' already in the database. Nothing to do.';
$string['modulename'] = 'MooTyper';
$string['modulename_help'] = 'The mootyper module allows us to learn how to type';
$string['modulenameplural'] = 'MooTypers';
$string['mootyper:addinstance'] = 'Add instance';
$string['mootyper:aftersetup'] = 'After setup';
$string['mootyperclosed'] = 'This MooTyper closed on {$a}.';
$string['mootyper:editall'] = '编辑全部';
$string['mootyperopen'] = 'This MooTyper will be open on {$a}.';
$string['mootyper:setup'] = '设置';
$string['mootyper:view'] = '查看';
$string['mootyper:viewgrades'] = '查看全部成绩';
$string['mootyper:viewmygrades'] = '查看我的成绩';
$string['mootyper'] = 'mootyper';
$string['mootyperclosetime'] = 'Close time';
$string['mootyperfieldset'] = 'Custom example fieldset';
$string['mootypername_help'] = 'Because of the variety of lessons and exercises you can have, the name should make it clear which MooTyper lesson or exam this acitivity is set for. Markdown syntax is supported.';
$string['mootypername'] = 'Test title';
$string['mootyperopentime'] = 'Open time';
$string['nogrades'] = 'No grades yet...';
$string['normalkeytops_title'] = 'Key top color';
$string['normalkeytops_descr'] = 'This sets the color of key tops except homerow keys.';
$string['normalkeytops_colour'] = '#CCCCCC';
$string['notavailable'] = '<b>Not currently available!<br></b>';
$string['noteditablebyme'] = 'Not editable by me.';
$string['notreadyyet'] = 'Not ready yet...please try again later.';
$string['options'] = '选项';
$string['overview'] = 'Overview';
$string['overview_help'] = 'MooTyper is an activity for learning to type using a computer keyboard. Some lessons with multiple exercises are included and teachers, managers, and admins can add more. Lessons can be downloaded for backup or transfer to other Moodle users. Lessons can also be uploaded to augment those already installed.';
$string['passbgc_title'] = 'Passing grade background color';
$string['passbgc_descr'] = 'This sets the background color for a passing grade.';
$string['passbgc_colour'] = '#7FEF6C';
$string['password'] = 'Password';
$string['passwordprotectedlesson'] = '{$a} is a password protected MooTyper activity.';
$string['pluginadministration'] = 'MooTyper Administration';
$string['pluginname'] = 'MooTyper';
$string['practice'] = 'Practice';
$string['precision'] = 'Precision';

$string['privacy:metadata:mootyper_attempts'] = 'Stores data regarding the status of an attempt.';
$string['privacy:metadata:mootyper_attempts:mootyperid'] = 'ID of the MooTyper activity for this attempt.';
$string['privacy:metadata:mootyper_attempts:userid'] = 'Userid of person making this attempt.';
$string['privacy:metadata:mootyper_attempts:timetaken'] = 'When the attempt was started.';
$string['privacy:metadata:mootyper_attempts:inprogress'] = 'Status: completed = 0 or still in progress = 1. ';
$string['privacy:metadata:mootyper_attempts:suspicion'] = 'Flag if too much time or too many mistakes.';

$string['privacy:metadata:mootyper_grades'] = 'Stores results of a completed exercise attempt.';
$string['privacy:metadata:mootyper_grades:mootyper'] = 'ID of the MooTyper activity for this attempt.';
$string['privacy:metadata:mootyper_grades:userid'] = 'Userid of person making this attempt.';
$string['privacy:metadata:mootyper_grades:grade'] = 'Grade for this attempt.';
$string['privacy:metadata:mootyper_grades:mistakes'] = 'Number of mistakes counted for this attempt.';
$string['privacy:metadata:mootyper_grades:timeinseconds'] = 'Total elapsed time in seconds for this attempt.';
$string['privacy:metadata:mootyper_grades:hitsperminute'] = 'Keystroke rate per minute.';
$string['privacy:metadata:mootyper_grades:fullhits'] = 'Number of keystrokes for this attempt.';
$string['privacy:metadata:mootyper_grades:precisionfield'] = 'Typing accuracy.';
$string['privacy:metadata:mootyper_grades:timetaken'] = 'When this attempt was completed?';
$string['privacy:metadata:mootyper_grades:exercise'] = 'The exercise used for this attempt';
$string['privacy:metadata:mootyper_grades:pass'] = 'Was this attempt a pass or fail?';
$string['privacy:metadata:mootyper_grades:attemptid'] = 'ID number of this attempt';
$string['privacy:metadata:mootyper_grades:wpm'] = 'Rate in Words Per Minute for this attempt.';

$string['privacy:metadata:mootyper_lessons'] = 'Stores lessons for MooTyper.';
$string['privacy:metadata:mootyper_lessons:lessonname'] = 'The name of the lesson or category.';
$string['privacy:metadata:mootyper_lessons:authorid'] = 'The userid who added the lesson.';
$string['privacy:metadata:mootyper_lessons:visible'] = 'Visibilty: only me, teacher inside this course, or all teachers.';
$string['privacy:metadata:mootyper_lessons:editable'] = ' Editable by: only me, teacher inside this course, or any teachers.';
$string['privacy:metadata:mootyper_lessons:courseid'] = 'Courseid where the lesson was created.';

$string['privacy:metadata:mootyper_exercises'] = 'Stores exercises for each lesson.'; 
$string['privacy:metadata:mootyper_exercises:texttotype'] = 'The text of the exercise.';
$string['privacy:metadata:mootyper_exercises:exercisename'] = 'The exercise name.';
$string['privacy:metadata:mootyper_exercises:lesson'] = 'The lesson this exercise is in.';
$string['privacy:metadata:mootyper_exercises:snumber'] = 'The sequence number in the lesson.';

$string['removeall'] = 'Remove all from ';
$string['removekb'] = '移除键盘布局';
$string['removelsnconfirm'] = 'Confirm you are about to completly remove ';
$string['removeexconfirm'] = 'Confirm you are about to remove an exercise from ';
$string['reqfield'] = '必填项';
$string['requiredgoal'] = 'Required precision';
$string['requiredgoal_help'] = 'Enter precision required for successful completion of an exercise.';
$string['requirepassword'] = 'Require password';
$string['resetmootyperall'] = 'Reset all MooTyper attempts and grades';
$string['returnto'] = '返回 {$a}';
$string['rhitspermin'] = '每分钟次数';
$string['rmistakes'] = '错误';
$string['rprecision'] = 'Precision';
$string['rprogress'] = '进度';
$string['rtime'] = '时间';
$string['sflesson'] = '课程';
$string['showkeyboard'] = '显示键盘';
$string['showkeyboard_help'] = 'If enabled, a visual representation of the currently selected keyboard layout will be shown while a user is typing an exercise.';
$string['showrecentactivity'] = 'Show recent activity';
$string['showrecentactivityconfig'] = 'Everyone can see notifications in recent activity reports.';
$string['statsbgc'] = 'Statistics background color';
$string['statsbgc_help'] = 'This sets the background color of the statistics bar. You can enter a hex color or named color. e.g. #95fc89 or green';
$string['statscolor_title'] = 'Statistics bar background color';
$string['statscolor_descr'] = 'This sets the background color of the statistics bar.';
$string['statscolor_colour'] = '#CCCCCC';
$string['student'] = '学生';
$string['suspicion_title'] = 'Suspicious grade warning color';
$string['suspicion_descr'] = 'This sets the marker color for a grade with suspicious results.';
$string['suspicion_colour'] = '#FFFF00';
$string['testing'] = 'Testing code';
$string['textbgc_title'] = '文本背景色';
$string['textbgc_descr'] = 'This sets the background color of the exercise text.';
$string['textbgc_colour'] = '#dddddd';
$string['textbgc'] = '文本背景色';
$string['textbgc_help'] = 'This sets the background color of the exercise text. You can enter a hex color or named color. e.g. #95fc89 or green';
$string['texterrorcolor_title'] = 'Text error color';
$string['texterrorcolor_descr'] = 'This sets the background color of a mistyped letter.';
$string['texterrorcolor_colour'] = '#ff9999';
$string['texterrorcolor'] = '文本错误颜色';
$string['texterrorcolor_help'] = 'This sets the background color of mistyped text. You can enter a hex color or named color. e.g. #95fc89 or green';
$string['timeisup'] = '时间耗尽';
$string['timelimit'] = 'Time limit';
$string['timelimit_help'] = 'If enabled, a warning about the time limit is displayed at the beginning of the exercise and a countdown timer is displayed. Letters typed after time is elapsed aren\'t counted';
$string['timeinseconds'] = 'Elapsed time';
$string['timetaken'] = '完成';
$string['usepassword'] = '密码保护课程';
$string['usepassword_help'] = 'If enabled, a password is required in order to access the lesson.';
$string['vaccess0'] = '所有教师';
$string['vaccess1'] = '该课程中的老师';
$string['vaccess2'] = '只有我';
$string['viewgrades'] = '查看全部成绩';
$string['viewmygrades'] = '查看我的成绩';
$string['visibility'] = 'Category visible to';
$string['vmistakes'] = '错误';
$string['wpm'] = 'WPM';
$string['xaxislabel'] = '范围';
