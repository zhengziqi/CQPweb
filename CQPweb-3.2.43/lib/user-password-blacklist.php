<?php
/*
 * CQPweb: a user-friendly interface to the IMS Corpus Query Processor
 * Copyright (C) 2008-today Andrew Hardie and contributors
 *
 * See http://cwb.sourceforge.net/cqpweb.php
 *
 * This file is part of CQPweb.
 * 
 * CQPweb is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * CQPweb is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */


/**
 * @file
 * 
 * Initialises the large array which contains, as keys, blacklisted passwords.
 * 
 * It's keys rather than values for quick lookup. It's placed onto $Config.
 */


/*
 * This is the 1000 most frequent passwords, taken from here:
 * 
 * https://github.com/danielmiessler/SecLists/blob/master/Passwords/10_million_password_list_top_1000.txt
 * 
 * (most recent access nto URL above: 2018-01-26)
 * 
 * The list is part of the "SecLists Project", which is under the MIT Licence.
 * That, to my understanding, permits me to make use of it here.
 * 
 * Note: things should be case-folded (to lower) before checking against this list.
 * 
 * A few CQPweb-specific ones have been added.
 */
if (!isset($Config->user_password_blacklist))
{
	$Config->user_password_blacklist = array (

			/* obvious cqpweb passwords */
			'cqpweb' => true,
			'cqp' => true,
			'corpusqueryprocessor' => true,
			'cwb' => true,
			'corpusworkbench' => true,
			'lancs' => true,
			'lancaster' => true,
			'erlangen' => true,
			'stuttgart' => true,
			'ims' => true,
			'bncweb' => true,
			'sketchengine' => true,
			'antconc' => true,
			'wordsmith' => true,
			'lancsbox' => true,
			'#lancsbox' => true,
			'graphcoll' => true,
			'monoconc' => true,
			'claws' => true,
			'treetagger' => true,
			'corpus' => true,
			'corpora' => true,
			'nlp' => true,
			'collocation' => true,
			'concordance' => true,
			'keyword' => true,
			'keywords' => true,
			'cl' => true,
			'corpling' => true,
			'corpusling' => true,
			'corpuslinguistics' => true,
			'corpus linguistics' => true,
			'bnc' => true,
			'bnc2014' => true,
			'bnc1994' => true,
			'eebo' => true,
			'boe' => true,
			'tcp' => true,
			'brown' => true,
			'frown' => true,
			'lob' => true,
			'flob' => true,



			/* top 1000 */
			'123456' => true,
			'password' => true,
			'12345678' => true,
			'qwerty' => true,
			'123456789' => true,
			'12345' => true,
			'1234' => true,
			'111111' => true,
			'1234567' => true,
			'dragon' => true,
			'123123' => true,
			'baseball' => true,
			'abc123' => true,
			'football' => true,
			'monkey' => true,
			'letmein' => true,
			'696969' => true,
			'shadow' => true,
			'master' => true,
			'666666' => true,
			'qwertyuiop' => true,
			'123321' => true,
			'mustang' => true,
			'1234567890' => true,
			'michael' => true,
			'654321' => true,
			'pussy' => true,
			'superman' => true,
			'1qaz2wsx' => true,
			'7777777' => true,
			'fuckyou' => true,
			'121212' => true,
			'000000' => true,
			'qazwsx' => true,
			'123qwe' => true,
			'killer' => true,
			'trustno1' => true,
			'jordan' => true,
			'jennifer' => true,
			'zxcvbnm' => true,
			'asdfgh' => true,
			'hunter' => true,
			'buster' => true,
			'soccer' => true,
			'harley' => true,
			'batman' => true,
			'andrew' => true,
			'tigger' => true,
			'sunshine' => true,
			'iloveyou' => true,
			'fuckme' => true,
			'2000' => true,
			'charlie' => true,
			'robert' => true,
			'thomas' => true,
			'hockey' => true,
			'ranger' => true,
			'daniel' => true,
			'starwars' => true,
			'klaster' => true,
			'112233' => true,
			'george' => true,
			'asshole' => true,
			'computer' => true,
			'michelle' => true,
			'jessica' => true,
			'pepper' => true,
			'1111' => true,
			'zxcvbn' => true,
			'555555' => true,
			'11111111' => true,
			'131313' => true,
			'freedom' => true,
			'777777' => true,
			'pass' => true,
			'fuck' => true,
			'maggie' => true,
			'159753' => true,
			'aaaaaa' => true,
			'ginger' => true,
			'princess' => true,
			'joshua' => true,
			'cheese' => true,
			'amanda' => true,
			'summer' => true,
			'love' => true,
			'ashley' => true,
			'6969' => true,
			'nicole' => true,
			'chelsea' => true,
			'biteme' => true,
			'matthew' => true,
			'access' => true,
			'yankees' => true,
			'987654321' => true,
			'dallas' => true,
			'austin' => true,
			'thunder' => true,
			'taylor' => true,
			'matrix' => true,
			'william' => true,
			'corvette' => true,
			'hello' => true,
			'martin' => true,
			'heather' => true,
			'secret' => true,
			'fucker' => true,
			'merlin' => true,
			'diamond' => true,
			'1234qwer' => true,
			'gfhjkm' => true,
			'hammer' => true,
			'silver' => true,
			'222222' => true,
			'88888888' => true,
			'anthony' => true,
			'justin' => true,
			'test' => true,
			'bailey' => true,
			'q1w2e3r4t5' => true,
			'patrick' => true,
			'internet' => true,
			'scooter' => true,
			'orange' => true,
			'11111' => true,
			'golfer' => true,
			'cookie' => true,
			'richard' => true,
			'samantha' => true,
			'bigdog' => true,
			'guitar' => true,
			'jackson' => true,
			'whatever' => true,
			'mickey' => true,
			'chicken' => true,
			'sparky' => true,
			'snoopy' => true,
			'maverick' => true,
			'phoenix' => true,
			'camaro' => true,
			'sexy' => true,
			'peanut' => true,
			'morgan' => true,
			'welcome' => true,
			'falcon' => true,
			'cowboy' => true,
			'ferrari' => true,
			'samsung' => true,
			'andrea' => true,
			'smokey' => true,
			'steelers' => true,
			'joseph' => true,
			'mercedes' => true,
			'dakota' => true,
			'arsenal' => true,
			'eagles' => true,
			'melissa' => true,
			'boomer' => true,
			'booboo' => true,
			'spider' => true,
			'nascar' => true,
			'monster' => true,
			'tigers' => true,
			'yellow' => true,
			'xxxxxx' => true,
			'123123123' => true,
			'gateway' => true,
			'marina' => true,
			'diablo' => true,
			'bulldog' => true,
			'qwer1234' => true,
			'compaq' => true,
			'purple' => true,
			'hardcore' => true,
			'banana' => true,
			'junior' => true,
			'hannah' => true,
			'123654' => true,
			'porsche' => true,
			'lakers' => true,
			'iceman' => true,
			'money' => true,
			'cowboys' => true,
			'987654' => true,
			'london' => true,
			'tennis' => true,
			'999999' => true,
			'ncc1701' => true,
			'coffee' => true,
			'scooby' => true,
			'0000' => true,
			'miller' => true,
			'boston' => true,
			'q1w2e3r4' => true,
			'fuckoff' => true,
			'brandon' => true,
			'yamaha' => true,
			'chester' => true,
			'mother' => true,
			'forever' => true,
			'johnny' => true,
			'edward' => true,
			'333333' => true,
			'oliver' => true,
			'redsox' => true,
			'player' => true,
			'nikita' => true,
			'knight' => true,
			'fender' => true,
			'barney' => true,
			'midnight' => true,
			'please' => true,
			'brandy' => true,
			'chicago' => true,
			'badboy' => true,
			'iwantu' => true,
			'slayer' => true,
			'rangers' => true,
			'charles' => true,
			'angel' => true,
			'flower' => true,
			'bigdaddy' => true,
			'rabbit' => true,
			'wizard' => true,
			'bigdick' => true,
			'jasper' => true,
			'enter' => true,
			'rachel' => true,
			'chris' => true,
			'steven' => true,
			'winner' => true,
			'adidas' => true,
			'victoria' => true,
			'natasha' => true,
			'1q2w3e4r' => true,
			'jasmine' => true,
			'winter' => true,
			'prince' => true,
			'panties' => true,
			'marine' => true,
			'ghbdtn' => true,
			'fishing' => true,
			'cocacola' => true,
			'casper' => true,
			'james' => true,
			'232323' => true,
			'raiders' => true,
			'888888' => true,
			'marlboro' => true,
			'gandalf' => true,
			'asdfasdf' => true,
			'crystal' => true,
			'87654321' => true,
			'12344321' => true,
			'sexsex' => true,
			'golden' => true,
			'blowme' => true,
			'bigtits' => true,
			'8675309' => true,
			'panther' => true,
			'lauren' => true,
			'angela' => true,
			'bitch' => true,
			'spanky' => true,
			'thx1138' => true,
			'angels' => true,
			'madison' => true,
			'winston' => true,
			'shannon' => true,
			'mike' => true,
			'toyota' => true,
			'blowjob' => true,
			'jordan23' => true,
			'canada' => true,
			'sophie' => true,
			'Password' => true,
			'apples' => true,
			'dick' => true,
			'tiger' => true,
			'razz' => true,
			'123abc' => true,
			'pokemon' => true,
			'qazxsw' => true,
			'55555' => true,
			'qwaszx' => true,
			'muffin' => true,
			'johnson' => true,
			'murphy' => true,
			'cooper' => true,
			'jonathan' => true,
			'liverpoo' => true,
			'david' => true,
			'danielle' => true,
			'159357' => true,
			'jackie' => true,
			'1990' => true,
			'123456a' => true,
			'789456' => true,
			'turtle' => true,
			'horny' => true,
			'abcd1234' => true,
			'scorpion' => true,
			'qazwsxedc' => true,
			'101010' => true,
			'butter' => true,
			'carlos' => true,
			'password1' => true,
			'dennis' => true,
			'slipknot' => true,
			'qwerty123' => true,
			'booger' => true,
			'asdf' => true,
			'1991' => true,
			'black' => true,
			'startrek' => true,
			'12341234' => true,
			'cameron' => true,
			'newyork' => true,
			'rainbow' => true,
			'nathan' => true,
			'john' => true,
			'1992' => true,
			'rocket' => true,
			'viking' => true,
			'redskins' => true,
			'butthead' => true,
			'asdfghjkl' => true,
			'1212' => true,
			'sierra' => true,
			'peaches' => true,
			'gemini' => true,
			'doctor' => true,
			'wilson' => true,
			'sandra' => true,
			'helpme' => true,
			'qwertyui' => true,
			'victor' => true,
			'florida' => true,
			'dolphin' => true,
			'pookie' => true,
			'captain' => true,
			'tucker' => true,
			'blue' => true,
			'liverpool' => true,
			'theman' => true,
			'bandit' => true,
			'dolphins' => true,
			'maddog' => true,
			'packers' => true,
			'jaguar' => true,
			'lovers' => true,
			'nicholas' => true,
			'united' => true,
			'tiffany' => true,
			'maxwell' => true,
			'zzzzzz' => true,
			'nirvana' => true,
			'jeremy' => true,
			'suckit' => true,
			'stupid' => true,
			'porn' => true,
			'monica' => true,
			'elephant' => true,
			'giants' => true,
			'jackass' => true,
			'hotdog' => true,
			'rosebud' => true,
			'success' => true,
			'debbie' => true,
			'mountain' => true,
			'444444' => true,
			'xxxxxxxx' => true,
			'warrior' => true,
			'1q2w3e4r5t' => true,
			'q1w2e3' => true,
			'123456q' => true,
			'albert' => true,
			'metallic' => true,
			'lucky' => true,
			'azerty' => true,
			'7777' => true,
			'shithead' => true,
			'alex' => true,
			'bond007' => true,
			'alexis' => true,
			'1111111' => true,
			'samson' => true,
			'5150' => true,
			'willie' => true,
			'scorpio' => true,
			'bonnie' => true,
			'gators' => true,
			'benjamin' => true,
			'voodoo' => true,
			'driver' => true,
			'dexter' => true,
			'2112' => true,
			'jason' => true,
			'calvin' => true,
			'freddy' => true,
			'212121' => true,
			'creative' => true,
			'12345a' => true,
			'sydney' => true,
			'rush2112' => true,
			'1989' => true,
			'asdfghjk' => true,
			'red123' => true,
			'bubba' => true,
			'4815162342' => true,
			'passw0rd' => true,
			'trouble' => true,
			'gunner' => true,
			'happy' => true,
			'fucking' => true,
			'gordon' => true,
			'legend' => true,
			'jessie' => true,
			'stella' => true,
			'qwert' => true,
			'eminem' => true,
			'arthur' => true,
			'apple' => true,
			'nissan' => true,
			'bullshit' => true,
			'bear' => true,
			'america' => true,
			'1qazxsw2' => true,
			'nothing' => true,
			'parker' => true,
			'4444' => true,
			'rebecca' => true,
			'qweqwe' => true,
			'garfield' => true,
			'01012011' => true,
			'beavis' => true,
			'69696969' => true,
			'jack' => true,
			'asdasd' => true,
			'december' => true,
			'2222' => true,
			'102030' => true,
			'252525' => true,
			'11223344' => true,
			'magic' => true,
			'apollo' => true,
			'skippy' => true,
			'315475' => true,
			'girls' => true,
			'kitten' => true,
			'golf' => true,
			'copper' => true,
			'braves' => true,
			'shelby' => true,
			'godzilla' => true,
			'beaver' => true,
			'fred' => true,
			'tomcat' => true,
			'august' => true,
			'buddy' => true,
			'airborne' => true,
			'1993' => true,
			'1988' => true,
			'lifehack' => true,
			'qqqqqq' => true,
			'brooklyn' => true,
			'animal' => true,
			'platinum' => true,
			'phantom' => true,
			'online' => true,
			'xavier' => true,
			'darkness' => true,
			'blink182' => true,
			'power' => true,
			'fish' => true,
			'green' => true,
			'789456123' => true,
			'voyager' => true,
			'police' => true,
			'travis' => true,
			'12qwaszx' => true,
			'heaven' => true,
			'snowball' => true,
			'lover' => true,
			'abcdef' => true,
			'00000' => true,
			'pakistan' => true,
			'007007' => true,
			'walter' => true,
			'playboy' => true,
			'blazer' => true,
			'cricket' => true,
			'sniper' => true,
			'hooters' => true,
			'donkey' => true,
			'willow' => true,
			'loveme' => true,
			'saturn' => true,
			'therock' => true,
			'redwings' => true,
			'bigboy' => true,
			'pumpkin' => true,
			'trinity' => true,
			'williams' => true,
			'tits' => true,
			'nintendo' => true,
			'digital' => true,
			'destiny' => true,
			'topgun' => true,
			'runner' => true,
			'marvin' => true,
			'guinness' => true,
			'chance' => true,
			'bubbles' => true,
			'testing' => true,
			'fire' => true,
			'november' => true,
			'minecraft' => true,
			'asdf1234' => true,
			'lasvegas' => true,
			'sergey' => true,
			'broncos' => true,
			'cartman' => true,
			'private' => true,
			'celtic' => true,
			'birdie' => true,
			'little' => true,
			'cassie' => true,
			'babygirl' => true,
			'donald' => true,
			'beatles' => true,
			'1313' => true,
			'dickhead' => true,
			'family' => true,
			'12121212' => true,
			'school' => true,
			'louise' => true,
			'gabriel' => true,
			'eclipse' => true,
			'fluffy' => true,
			'147258369' => true,
			'lol123' => true,
			'explorer' => true,
			'beer' => true,
			'nelson' => true,
			'flyers' => true,
			'spencer' => true,
			'scott' => true,
			'lovely' => true,
			'gibson' => true,
			'doggie' => true,
			'cherry' => true,
			'andrey' => true,
			'snickers' => true,
			'buffalo' => true,
			'pantera' => true,
			'metallica' => true,
			'member' => true,
			'carter' => true,
			'qwertyu' => true,
			'peter' => true,
			'alexande' => true,
			'steve' => true,
			'bronco' => true,
			'paradise' => true,
			'goober' => true,
			'5555' => true,
			'samuel' => true,
			'montana' => true,
			'mexico' => true,
			'dreams' => true,
			'michigan' => true,
			'cock' => true,
			'carolina' => true,
			'yankee' => true,
			'friends' => true,
			'magnum' => true,
			'surfer' => true,
			'poopoo' => true,
			'maximus' => true,
			'genius' => true,
			'cool' => true,
			'vampire' => true,
			'lacrosse' => true,
			'asd123' => true,
			'aaaa' => true,
			'christin' => true,
			'kimberly' => true,
			'speedy' => true,
			'sharon' => true,
			'carmen' => true,
			'111222' => true,
			'kristina' => true,
			'sammy' => true,
			'racing' => true,
			'ou812' => true,
			'sabrina' => true,
			'horses' => true,
			'0987654321' => true,
			'qwerty1' => true,
			'pimpin' => true,
			'baby' => true,
			'stalker' => true,
			'enigma' => true,
			'147147' => true,
			'star' => true,
			'poohbear' => true,
			'boobies' => true,
			'147258' => true,
			'simple' => true,
			'bollocks' => true,
			'12345q' => true,
			'marcus' => true,
			'brian' => true,
			'1987' => true,
			'qweasdzxc' => true,
			'drowssap' => true,
			'hahaha' => true,
			'caroline' => true,
			'barbara' => true,
			'dave' => true,
			'viper' => true,
			'drummer' => true,
			'action' => true,
			'einstein' => true,
			'bitches' => true,
			'genesis' => true,
			'hello1' => true,
			'scotty' => true,
			'friend' => true,
			'forest' => true,
			'010203' => true,
			'hotrod' => true,
			'google' => true,
			'vanessa' => true,
			'spitfire' => true,
			'badger' => true,
			'maryjane' => true,
			'friday' => true,
			'alaska' => true,
			'1232323q' => true,
			'tester' => true,
			'jester' => true,
			'jake' => true,
			'champion' => true,
			'billy' => true,
			'147852' => true,
			'rock' => true,
			'hawaii' => true,
			'badass' => true,
			'chevy' => true,
			'420420' => true,
			'walker' => true,
			'stephen' => true,
			'eagle1' => true,
			'bill' => true,
			'1986' => true,
			'october' => true,
			'gregory' => true,
			'svetlana' => true,
			'pamela' => true,
			'1984' => true,
			'music' => true,
			'shorty' => true,
			'westside' => true,
			'stanley' => true,
			'diesel' => true,
			'courtney' => true,
			'242424' => true,
			'kevin' => true,
			'porno' => true,
			'hitman' => true,
			'boobs' => true,
			'mark' => true,
			'12345qwert' => true,
			'reddog' => true,
			'frank' => true,
			'qwe123' => true,
			'popcorn' => true,
			'patricia' => true,
			'aaaaaaaa' => true,
			'1969' => true,
			'teresa' => true,
			'mozart' => true,
			'buddha' => true,
			'anderson' => true,
			'paul' => true,
			'melanie' => true,
			'abcdefg' => true,
			'security' => true,
			'lucky1' => true,
			'lizard' => true,
			'denise' => true,
			'3333' => true,
			'a12345' => true,
			'123789' => true,
			'ruslan' => true,
			'stargate' => true,
			'simpsons' => true,
			'scarface' => true,
			'eagle' => true,
			'123456789a' => true,
			'thumper' => true,
			'olivia' => true,
			'naruto' => true,
			'1234554321' => true,
			'general' => true,
			'cherokee' => true,
			'a123456' => true,
			'vincent' => true,
			'Usuckballz1' => true,
			'spooky' => true,
			'qweasd' => true,
			'cumshot' => true,
			'free' => true,
			'frankie' => true,
			'douglas' => true,
			'death' => true,
			'1980' => true,
			'loveyou' => true,
			'kitty' => true,
			'kelly' => true,
			'veronica' => true,
			'suzuki' => true,
			'semperfi' => true,
			'penguin' => true,
			'mercury' => true,
			'liberty' => true,
			'spirit' => true,
			'scotland' => true,
			'natalie' => true,
			'marley' => true,
			'vikings' => true,
			'system' => true,
			'sucker' => true,
			'king' => true,
			'allison' => true,
			'marshall' => true,
			'1979' => true,
			'098765' => true,
			'qwerty12' => true,
			'hummer' => true,
			'adrian' => true,
			'1985' => true,
			'vfhbyf' => true,
			'sandman' => true,
			'rocky' => true,
			'leslie' => true,
			'antonio' => true,
			'98765432' => true,
			'4321' => true,
			'softball' => true,
			'passion' => true,
			'mnbvcxz' => true,
			'bastard' => true,
			'passport' => true,
			'horney' => true,
			'rascal' => true,
			'howard' => true,
			'franklin' => true,
			'bigred' => true,
			'assman' => true,
			'alexander' => true,
			'homer' => true,
			'redrum' => true,
			'jupiter' => true,
			'claudia' => true,
			'55555555' => true,
			'141414' => true,
			'zaq12wsx' => true,
			'shit' => true,
			'patches' => true,
			'nigger' => true,
			'cunt' => true,
			'raider' => true,
			'infinity' => true,
			'andre' => true,
			'54321' => true,
			'galore' => true,
			'college' => true,
			'russia' => true,
			'kawasaki' => true,
			'bishop' => true,
			'77777777' => true,
			'vladimir' => true,
			'money1' => true,
			'freeuser' => true,
			'wildcats' => true,
			'francis' => true,
			'disney' => true,
			'budlight' => true,
			'brittany' => true,
			'1994' => true,
			'00000000' => true,
			'sweet' => true,
			'oksana' => true,
			'honda' => true,
			'domino' => true,
			'bulldogs' => true,
			'brutus' => true,
			'swordfis' => true,
			'norman' => true,
			'monday' => true,
			'jimmy' => true,
			'ironman' => true,
			'ford' => true,
			'fantasy' => true,
			'9999' => true,
			'7654321' => true,
			'PASSWORD' => true,
			'hentai' => true,
			'duncan' => true,
			'cougar' => true,
			'1977' => true,
			'jeffrey' => true,
			'house' => true,
			'dancer' => true,
			'brooke' => true,
			'timothy' => true,
			'super' => true,
			'marines' => true,
			'justice' => true,
			'digger' => true,
			'connor' => true,
			'patriots' => true,
			'karina' => true,
			'202020' => true,
			'molly' => true,
			'everton' => true,
			'tinker' => true,
			'alicia' => true,
			'rasdzv3' => true,
			'poop' => true,
			'pearljam' => true,
			'stinky' => true,
			'naughty' => true,
			'colorado' => true,
			'123123a' => true,
			'water' => true,
			'test123' => true,
			'ncc1701d' => true,
			'motorola' => true,
			'ireland' => true,
			'asdfg' => true,
			'slut' => true,
			'matt' => true,
			'houston' => true,
			'boogie' => true,
			'zombie' => true,
			'accord' => true,
			'vision' => true,
			'bradley' => true,
			'reggie' => true,
			'kermit' => true,
			'froggy' => true,
			'ducati' => true,
			'avalon' => true,
			'6666' => true,
			'9379992' => true,
			'sarah' => true,
			'saints' => true,
			'logitech' => true,
			'chopper' => true,
			'852456' => true,
			'simpson' => true,
			'madonna' => true,
			'juventus' => true,
			'claire' => true,
			'159951' => true,
			'zachary' => true,
			'yfnfif' => true,
			'wolverin' => true,
			'warcraft' => true,
			'hello123' => true,
			'extreme' => true,
			'penis' => true,
			'peekaboo' => true,
			'fireman' => true,
			'eugene' => true,
			'brenda' => true,
			'123654789' => true,
			'russell' => true,
			'panthers' => true,
			'georgia' => true,
			'smith' => true,
			'skyline' => true,
			'jesus' => true,
			'elizabet' => true,
			'spiderma' => true,
			'smooth' => true,
			'pirate' => true,
			'empire' => true,
			'bullet' => true,
			'8888' => true,
			'virginia' => true,
			'valentin' => true,
			'psycho' => true,
			'predator' => true,
			'arizona' => true,
			'134679' => true,
			'mitchell' => true,
			'alyssa' => true,
			'vegeta' => true,
			'titanic' => true,
			'christ' => true,
			'goblue' => true,
			'fylhtq' => true,
			'wolf' => true,
			'mmmmmm' => true,
			'kirill' => true,
			'indian' => true,
			'hiphop' => true,
			'baxter' => true,
			'awesome' => true,
			'people' => true,
			'danger' => true,
			'roland' => true,
			'mookie' => true,
			'741852963' => true,
			'1111111111' => true,
			'dreamer' => true,
			'bambam' => true,
			'arnold' => true,
			'1981' => true,
			'skipper' => true,
			'serega' => true,
			'rolltide' => true,
			'elvis' => true,
			'changeme' => true,
			'simon' => true,
			'1q2w3e' => true,
			'lovelove' => true,
			'fktrcfylh' => true,
			'denver' => true,
			'tommy' => true,
			'mine' => true,
			'loverboy' => true,
			'hobbes' => true,
			'happy1' => true,
			'alison' => true,
			'nemesis' => true,
			'chevelle' => true,
			'cardinal' => true,
			'burton' => true,
			'wanker' => true,
			'picard' => true,
			'151515' => true,
			'tweety' => true,
			'michael1' => true,
			'147852369' => true,
			'12312' => true,
			'xxxx' => true,
			'windows' => true,
			'turkey' => true,
			'456789' => true,
			'1974' => true,
			'vfrcbv' => true,
			'sublime' => true,
			'1975' => true,
			'galina' => true,
			'bobby' => true,
			'newport' => true,
			'manutd' => true,
			'daddy' => true,
			'american' => true,
			'alexandr' => true,
			'1966' => true,
			'victory' => true,
			'rooster' => true,
			'qqq111' => true,
			'madmax' => true,
			'electric' => true,
			'bigcock' => true,
			'a1b2c3' => true,
			'wolfpack' => true,
			'spring' => true,
			'phpbb' => true,
			'lalala' => true,
			'suckme' => true,
			'spiderman' => true,
			'eric' => true,
			'darkside' => true,
			'classic' => true,
			'raptor' => true,
			'123456789q' => true,
			'hendrix' => true,
			'1982' => true,
			'wombat' => true,
			'avatar' => true,
			'alpha' => true,
			'zxc123' => true,
			'crazy' => true,
			'hard' => true,
			'england' => true,
			'brazil' => true,
			'1978' => true,
			'01011980' => true,
			'wildcat' => true,
			'polina' => true,
			'freepass' => true,

			/* and finally, I don't know if anyone would try this, but */
			'correct horse battery staple' => true
			);
}