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
 * This file defines the French(V4) keyboard layout.
 *
 * @package    mod_mootyper
 * @copyright  2016 onwards AL Rachels (drachels@drachels.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 require_once(dirname(dirname(dirname(dirname(__FILE__)))).'/config.php');
 require_login($course, true, $cm);
?>
<div id="innerKeyboard" style="margin: 0px auto;display: inline-block;
<?php
echo (isset($displaynone) && ($displaynone == true)) ? 'display:none;' : '';
?>
"><br>
<div id="keyboard" class="keyboardback"> Français(V4) Keyboard Layout<br>
    <section>
        <div class="mtrow" style='float: left; margin-left:5px; font-size: 15px !important; line-height: 15px'>
            <div id="jkey²" class="normal" style='text-align:left;'>&nbsp;<br>²</div>
            <div id="jkey1" class="normal" style='text-align:left;'>1<br>& </div>
            <div id="jkey2" class="normal" style='text-align:left;'>2<br>é
                <span style="color:red">&nbsp;&nbsp;&nbsp;~</span></div>
            <div id="jkey3" class="normal" style='text-align:left;'>3<br>"
                <span style="color:blue">&nbsp;&nbsp;&nbsp;#</span></div>
            <div id="jkey4" class="normal" style='text-align:left;'>4<br>'
                <span style="color:blue">&nbsp;&nbsp;&nbsp;{</span></div>
            <div id="jkey5" class="normal" style='text-align:left;'>5<br>(
                <span style="color:blue">&nbsp;&nbsp;&nbsp;[</span></div>
            <div id="jkey6" class="normal" style='text-align:left;'>6<br>-
                <span style="color:blue">&nbsp;&nbsp;&nbsp;|</span></div>
            <div id="jkey7" class="normal" style='text-align:left;'>7<br>è
                <span style="color:red">&nbsp;&nbsp;&nbsp;`</span></div>
            <div id="jkey8" class="normal" style='text-align:left;'>8<br>_
                <span style="color:blue">&nbsp;&nbsp;&nbsp;\</span></div>
            <div id="jkey9" class="normal" style='text-align:left;'>9<br>ç
                <span style="color:blue">&nbsp;&nbsp;&nbsp;^</span></div>
            <div id="jkey0" class="normal" style='text-align:left;'>0<br>à
                <span style="color:blue">&nbsp;@</span></div>
            <div id="jkeyparenr" class="normal" style='text-align:left;'>°<br>)
                <span style="color:blue">&nbsp;&nbsp;&nbsp;]</span></div>
            <div id="jkeyequal" class="normal" style='text-align:left;'>+<br>=
                <span style="color:blue">&nbsp;&nbsp;&nbsp;}</span></div>
            <div id="jkeybackspace" class="normal" style="width: 95px;">Suppr arrière</div>
        </div>
        <div style="float: left;">
            <div class="mtrow" style='float: left; margin-left:5px; font-size: 15px !important; line-height: 15px'>
                <div id="jkeytab" class="normal" style="width: 60px;">Tab</div>
                <div id="jkeya" class="normal">A</div>
                <div id="jkeyz" class="normal">Z</div>
                <div id="jkeye" class="normal">E<sub style="color:blue">&nbsp; €</sub></div>
                <div id="jkeyr" class="normal">R</div>
                <div id="jkeyt" class="normal">T</div>
                <div id="jkeyy" class="normal">Y</div>
                <div id="jkeyu" class="normal">U</div>
                <div id="jkeyi" class="normal">I</div>
                <div id="jkeyo" class="normal">O</div>
                <div id="jkeyp" class="normal">P</div>
                <div id="jkeycaret" class="normal" style='text-align:left;'>
                    <span style="color:red">¨<br>^</span></div>
                <div id="jkeydollar" class="normal" style="text-align:left;">£<br>$
                    <span style="color:blue">&nbsp;&nbsp;&nbsp;¤</div>
            </div>
            <span id="jkeyenter" class="normal" style="width: 50px; margin-right:5px; float: right; height: 85px;">Entrée</span>
            <div class="mtrow" style='float: left; margin-left:5px; font-size: 15px !important; line-height: 15px'> 
                <div id="jkeycaps" class="normal" style="width: 80px;">Verr Maj</div>
                <div id="jkeyq" class="finger4">Q</div>
                <div id="jkeys" class="finger3">S</div>
                <div id="jkeyd" class="finger2">D</div>
                <div id="jkeyf" class="finger1">F</div>
                <div id="jkeyg" class="normal">G</div>
                <div id="jkeyh" class="normal">H</div>
                <div id="jkeyj" class="finger1">J</div>
                <div id="jkeyk" class="finger2">K</div>
                <div id="jkeyl" class="finger3">L</div>
                <div id="jkeym" class="finger4">M</div>
                <div id="jkeyù" class="normal" style='text-align:left;'>%<br>ù</div>
                <div id="jkey*" class="normal" style='text-align:left;'>µ<br>*</div>
            </div>
        </div>
        <div class="mtrow" style='float: left; margin-left:5px; font-size: 15px !important; line-height: 15px'>
            <div id="jkeyshiftl" class="normal" style="width: 60px;">Maj</div>
            <div id="jkeyckck" class="normal" style='text-align:left;'>&gt;<br>&lt;</div>
            <div id="jkeyw" class="normal">W</div>
            <div id="jkeyx" class="normal">X</div>
            <div id="jkeyc" class="normal">C</div>
            <div id="jkeyv" class="normal">V</div>
            <div id="jkeyb" class="normal">B</div>
            <div id="jkeyn" class="normal">N</div>
            <div id="jkeycomma" class="normal" style='text-align:left;'>?<br>,</div>
            <div id="jkeysemicolon" class="normal" style='text-align:left;'>.<br>;</div>
            <div id="jkeycolon" class="normal" style='text-align:left;'>/<br>:</div>
            <div id="jkeyexclam" class="normal" style='text-align:left;'>§<br>!</div>
            <div id="jkeyshiftd" class="normal" style="width: 115px; border-right-style: solid;">Maj</div>
        </div>
        <div class="mtrow" style='float: left; margin-left:5px; font-size: 15px !important; line-height: 15px'>
            <div id="jkeyctrll" class="normal" style="width: 60px;">Ctrl</div>
            <div id="jkeyfn" class="normal" style="width: 50px;">Win</div>
            <div id="jkeyalt" class="normal" style="width: 50px;">Alt</div>
            <div id="jkeyspace" class="normal" style="width: 255px;">Espace</div>
            <div id="jkeyaltgr" class="normal" style=" font-size: 15px !important; color:blue; width: 50px;">Alt Gr</div>
            <div id="jkeyfn" class="normal" style="width: 50px;">Win</div>
            <div id="jempty" class="normal" style="width: 50px;">Menu</div>
            <div id="jkeyctrlr" class="normal" style="width: 50px;">Ctrl</div>
        </div>
    </section>
</div>
</div>
