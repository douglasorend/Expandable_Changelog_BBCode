[hr]
[center][color=red][size=16pt][b]EXPANDING & COLLAPSING CHANGELOG TAG v3.2b[/b][/size][/color]
[url=http://www.simplemachines.org/community/index.php?action=profile;u=253913][b]By Dougiefresh[/b][/url] -> [url=http://custom.simplemachines.org/mods/index.php?mod=3981]Link to Mod[/url]
[/center]
[hr]

[color=blue][b][size=12pt][u]Notice[/u][/size][/b][/color]
This mod is no longer being supported.  You are strongly encouraged to use [url=https://custom.simplemachines.org/mods/index.php?mod=4166]Yet Another Spoiler Mod[/url] instead...

[color=blue][b][size=12pt][u]Introduction[/u][/size][/b][/color]
This modification adds a BBCode to the forum that allows the post author to hide a changelog in the post, which is clickable to display it to the user.

This BBCode takes the forms:
[code][nobbc]
[nobbc][changelog]{content}[/changelog][/nobbc]
[nobbc][changelog {params}]{content}[/changelog][/nobbc]
[nobbc][changelog=Some Text]{content goes here}[/changelog][/nobbc]
[/nobbc][/code]

The [b]{params}[/b] section may be any of the following parameters:
o [b]text[/b] - Replaces default "changelog" text in the header.
o [b]quote[/b] - Text that follows the "changelog" text in the header.  Must be in quotes.
o [b]show[/b] - Replaces default "Show" text in the header.
o [b]hide[/b] - Replaces default "Hide" text in the header.
o [b]guests[/b] - Flag to show changelog to guests or not.  May be [b]n[/b], [b]no[/b], [b]false[/b], [b]y[/b], [b]yes[/b], or [b]true[/b].

Note that the form (#3) with the equal sign does not parse other block-level bbcode tags inside the changelog.  Empty form or form with parameters does not have this restriction.

[color=blue][b][size=12pt][u]Admin Settings[/u][/size][/b][/color]
This BBCode may be disabled by going into the [b]Admin[/b] => [b]Forum[/b] => [b]Posts and Topics[/b] => [b]Bulletin Board Code[/b] and unchecking the bbcodes you don't want to use.  You may also be uninstall this mod in order to disable it.

[color=blue][b][size=12pt][u]Compatibility Notes[/u][/size][/b][/color]
This mod was tested on SMF 2.0.9, but should work on SMF 2.1 Beta 1, as well as SMF 2.0 and up.  SMF 1.x is not and will not be supported.

[color=blue][b][size=12pt][u]Changelog[/u][/size][/b][/color]
The changelog can be viewed at [url=http://www.xptsp.com/board/free-modifications/expandable-changelog-bbcode/?tab=1]XPtsp.com[/url].

[color=blue][b][size=12pt][u]License[/u][/size][/b][/color]
Copyright (c) 2015 - 2018, Douglas Orend
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
