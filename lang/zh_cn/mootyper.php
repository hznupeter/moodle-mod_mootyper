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
 * Chinese strings for mootyper
 *
 * @package    mod_mootyper
 * @copyright  2012 Jaka Luthar (jaka.luthar@gmail.com)
 * @copyright  2016 onwards AL Rachels (drachels@drachels.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allstring'] = '所有';
$string['average'] = '平均';
$string['bymootyper'] = '按练习';
$string['byuser'] = '按用户';
$string['cancel'] = '取消';
$string['charttitleallgrades'] = '全部成绩';
$string['charttitlemyowngrades'] = '我的成绩';
$string['chere'] = '单击开始';
$string['closebeforeopen'] = '无法更新MooTyper. 你选择的结束时间早于开始时间。';
$string['configdateformat'] = '成绩单中的日期显示格式。默认值, "M d, Y G:i" 是 月份,日期,年份 和 小时. 可以参考PHP 手册中的Date格式。';
$string['configrequirepassword'] = '设置密码';
$string['configpassword_desc'] = '是否需要密码才能进去课程。';
$string['configtimelimit_desc'] = '如果设置时间限制，那么在开始之前会有提醒，并会有计时器。如果设置为0,则表示无时间限制。';
$string['continue'] = '继续';
$string['continuoustype'] = '继续打字';
$string['continuoustype_help'] = '如果开启，输入错误后无法改正。';
$string['countmistakes'] = '计数键盘次数';
$string['countmistakes_help'] = '如果开启，所有按键中的同一个错误会被重复记录。';
$string['countmistypedspaces'] = '记录误触次数';
$string['countmistypedspaces_help'] = '如果开启，将会记录输入错误。';
$string['course_exercises_viewed'] = '查看练习';
$string['csvexport'] = '导出到 .csv';
$string['cursorcolor_title'] = '光标颜色';
$string['cursorcolor_descr'] = '下一个要输入的文字的颜色。';
$string['cursorcolor_colour'] = '#00ff00';
$string['cursorcolor'] = '光标颜色';
$string['cursorcolor_help'] = 'This sets the color around the typing cursor. You can enter a hex color or named color. e.g. #95fc89 or green';
$string['dateformat'] = '默认时间格式';
$string['defaultlayout'] = '默认键盘布局';
$string['defaultprecision'] = '默认打字正确率%';
$string['defaulttextalign'] = '文本对齐';
$string['defaulttextalign_help'] = 'Set text alignment while typing exercises to left, center, or right.';
$string['defaulteditalign'] = '编辑文本对齐方式';
$string['defaulteditalign_help'] = 'Set text alignment while editing exercises to left, center, or right.';
$string['defaulttextalign_left'] = '左对齐';
$string['defaulttextalign_center'] = '居中';
$string['defaulttextalign_right'] = '右对齐';
$string['defaulttextalign_warning'] = '注意:请在打字前设置对齐方式!';
$string['export'] = '导出 ';
$string['exportconfirm'] = '确认你要导出的信息 ';
$string['eaccess0'] = '任何老师';
$string['eaccess1'] = '该课程中的教师';
$string['eaccess2'] = '只有我';
$string['eaddnew'] = '增加新练习/分类';
$string['editable'] = '可编辑';
$string['editexercises'] = '导出 /编辑练习';
$string['eeditlabel'] = '编辑';
$string['eheading'] = '管理MooTyper练习';
$string['emanage'] = '单击此处管理练习及分类';
$string['emptypassword'] = '密码不能为空';
$string['ename'] = '练习: ';
$string['endlesson'] = 'End of the category / lesson';
$string['enterpassword'] = '请输入密码:';
$string['eremove'] = '移除';
$string['etext'] = '文本';
$string['etitle'] = 'MooTyper 练习';
$string['examdone'] = '考试已结束。';
$string['excategory'] = '练习分类';
$string['excategory_help'] = 'Pick a Lesson name to use for this MooTyper.';
$string['exercise'] = 'Exercise {$a} of ';
$string['exercise_added'] = '添加练习/分类';
$string['exercise_edited'] = '编辑练习';
$string['exercise_removed'] = '移除练习';
$string['eventlessonexport'] = '导出课程';
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
$string['fullhits'] = '所有输入';
$string['gradesfilename'] = 'grades.csv';
$string['grade_removed'] = '移除分数';
$string['gviewmode'] = '查看';
$string['hitsperminute'] = '次/分钟';
$string['invalidaccess'] = '你无权查看。';
$string['isexamtext'] = '考试';
$string['kblimportadd'] = ' 布局成功存入数据库。';
$string['kblimportnotadd'] = ' 数据库中已经存在该布局。';
$string['keyboardbgc_title'] = '键盘背景色';
$string['keyboardbgc_descr'] = 'This sets the background color around keyboard keys.';
$string['keyboardbgc_colour'] = '#DDDDDD';
$string['keybdbgc'] = '键盘背景色';
$string['keybdbgc_help'] = 'This sets the background color around keyboard keys. You can enter a hex color or named color. e.g. #95fc89 or green';
$string['keytopbgc'] = '普通按键颜色';
$string['keytopbgc_help'] = '设置普通按键的颜色，除了中排键以外的按键。你可以使用16进制颜色表示法，或者颜色的名字。如 #95fc89 or green';
$string['layout'] = '键盘布局';
$string['layout_help'] = '当键盘选项设为是时，你可以在这里选择键盘布局。';
$string['layout_imported'] = '导入键盘布局';
$string['lesson_export'] = '课程输出设置';
$string['lesson_export_filename'] = '课程输出文件名';
$string['lesson_export_filenameconfig'] = 'Add GMT as part of exported lesson filenames for simple versioning system.';
$string['lesson_exported'] = '导出课程/分类';
$string['lesson_imported'] = '导入课程/分类';
$string['lesson_removed'] = '移除课程及相关练习';
$string['loginfail'] = '登录失败，请重试...';
$string['lsnname'] = '分类名字';
$string['lsnimport'] = '导入课程/键盘布局';
$string['lsnimportadd'] = ' 已成功加入数据库中。';
$string['lsnimportnotadd'] = '已经在数据库中，没啥可做的。';
$string['modulename'] = 'MooTyper';
$string['modulename_help'] = 'Mootyper模块将帮助我们学习打字';
$string['modulenameplural'] = 'MooTypers';
$string['mootyper:addinstance'] = 'Add instance';
$string['mootyper:aftersetup'] = 'After setup';
$string['mootyperclosed'] = '该 MooTyper 结束于 {$a}.';
$string['mootyper:editall'] = '编辑全部';
$string['mootyperopen'] = '该 MooTyper将开始于 {$a}.';
$string['mootyper:setup'] = '设置';
$string['mootyper:view'] = '查看';
$string['mootyper:viewgrades'] = '查看全部成绩';
$string['mootyper:viewmygrades'] = '查看我的成绩';
$string['mootyper'] = 'mootyper';
$string['mootyperclosetime'] = '结束时间';
$string['mootyperfieldset'] = 'Custom example fieldset';
$string['mootypername_help'] = 'Because of the variety of lessons and exercises you can have, the name should make it clear which MooTyper lesson or exam this acitivity is set for. 支持Markdown语法。';
$string['mootypername'] = '测试标题';
$string['mootyperopentime'] = '开始时间';
$string['nogrades'] = '暂无成绩...';
$string['normalkeytops_title'] = '普通按键颜色';
$string['normalkeytops_descr'] = '除中排键盘以外的按键颜色。';
$string['normalkeytops_colour'] = '#CCCCCC';
$string['notavailable'] = '<b>当前不可用！<br></b>';
$string['noteditablebyme'] = '无权编辑。';
$string['notreadyyet'] = '尚未准备就绪，请稍后重试！';
$string['options'] = '选项';
$string['overview'] = '预览';
$string['overview_help'] = 'MooTyper is an activity for learning to type using a computer keyboard. Some lessons with multiple exercises are included and teachers, managers, and admins can add more. Lessons can be downloaded for backup or transfer to other Moodle users. Lessons can also be uploaded to augment those already installed.';
$string['passbgc_title'] = 'Passing grade background color';
$string['passbgc_descr'] = 'This sets the background color for a passing grade.';
$string['passbgc_colour'] = '#7FEF6C';
$string['password'] = '密码';
$string['passwordprotectedlesson'] = '{$a} 是一个保护MooTyper的密码。';
$string['pluginadministration'] = 'MooTyper 管理';
$string['pluginname'] = 'MooTyper';
$string['practice'] = '练习';
$string['precision'] = '正确率';

$string['privacy:metadata:mootyper_attempts'] = 'Stores data regarding the status of an attempt.';
$string['privacy:metadata:mootyper_attempts:mootyperid'] = 'ID of the MooTyper activity for this attempt.';
$string['privacy:metadata:mootyper_attempts:userid'] = 'Userid of person making this attempt.';
$string['privacy:metadata:mootyper_attempts:timetaken'] = 'When the attempt was started.';
$string['privacy:metadata:mootyper_attempts:inprogress'] = '状态: 完成 = 0 ；进行中= 1. ';
$string['privacy:metadata:mootyper_attempts:suspicion'] = 'Flag if too much time 或者太多错误。';

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
$string['privacy:metadata:mootyper_lessons:lessonname'] = '课程或分类的名字。';
$string['privacy:metadata:mootyper_lessons:authorid'] = 'The userid who added the lesson.';
$string['privacy:metadata:mootyper_lessons:visible'] = '可见性: 只有我，该课程的教师，所有教师。';
$string['privacy:metadata:mootyper_lessons:editable'] = ' 编辑权: 只有我，该课程的教师，所有教师';
$string['privacy:metadata:mootyper_lessons:courseid'] = 'Courseid where the lesson was created.';

$string['privacy:metadata:mootyper_exercises'] = 'Stores exercises for each lesson.'; 
$string['privacy:metadata:mootyper_exercises:texttotype'] = 'The text of the exercise.';
$string['privacy:metadata:mootyper_exercises:exercisename'] = 'The exercise name.';
$string['privacy:metadata:mootyper_exercises:lesson'] = 'The lesson this exercise is in.';
$string['privacy:metadata:mootyper_exercises:snumber'] = 'The sequence number in the lesson.';

$string['removeall'] = '移除所有';
$string['removekb'] = '移除键盘布局';
$string['removelsnconfirm'] = '确认即将移除的内容 ';
$string['removeexconfirm'] = '确认你将要从练习中移除';
$string['reqfield'] = '必填项';
$string['requiredgoal'] = '正确率必填';
$string['requiredgoal_help'] = '请输入完成该练习必须达到的正确率。';
$string['requirepassword'] = '密码必填';
$string['resetmootyperall'] = 'Reset all MooTyper attempts and grades';
$string['returnto'] = '返回 {$a}';
$string['rhitspermin'] = '每分钟次数';
$string['rmistakes'] = '错误';
$string['rprecision'] = '正确率';
$string['rprogress'] = '进度';
$string['rtime'] = '时间';
$string['sflesson'] = '课程';
$string['showkeyboard'] = '显示键盘';
$string['showkeyboard_help'] = 'If enabled, a visual representation of the currently selected keyboard layout will be shown while a user is typing an exercise.';
$string['showrecentactivity'] = '显示最近活动';
$string['showrecentactivityconfig'] = '每个人都将可以看到最近的活动通知。';
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
$string['timeinseconds'] = '耗时';
$string['timetaken'] = '完成时间';
$string['usepassword'] = '密码保护课程';
$string['usepassword_help'] = '如果启用，需要有密码才能查看该课程。';
$string['vaccess0'] = '所有教师';
$string['vaccess1'] = '该课程中的老师';
$string['vaccess2'] = '只有我';
$string['viewgrades'] = '查看全部成绩';
$string['viewmygrades'] = '查看我的成绩';
$string['visibility'] = '分类可见性';
$string['vmistakes'] = '错误';
$string['wpm'] = '速度';
$string['xaxislabel'] = '范围';
