<?php
if (
  ($_SERVER['HTTP_X_FROM'] ?? '') !== 'CF-WORKER' ||
  empty($_SERVER['HTTP_CF_CONNECTING_IP'])
) {
  http_response_code(403);
  exit("#EXTM3U\n# DIRECT ACCESS BLOCKED");
}




#EXTM3U
#EXTM3U url-tvg="https://raw.githubusercontent.com/azimabid00/epg/main/astro_epg.xml,https://raw.githubusercontent.com/azimabid00/epg/main/unifi_epg.xml,https://epg.pw/xmltv/epg_MY.xml,https://raw.githubusercontent.com/dbghelp/StarHub-TV-EPG/main/starhub.xml,https://epgshare01.online/epgshare01/epg_ripper_ID1.xml.gz,https://raw.githubusercontent.com/dbghelp/mewatch-EPG/refs/heads/main/mewatch.xml, https://raw.githubusercontent.com/dbghelp/Test-EPG/refs/heads/main/test_epg.xml,https://raw.githubusercontent.com/walpak1/epg/refs/heads/gh-pages/mana2.xml,https://raw.githubusercontent.com/dbghelp/Singtel-TV-EPG/refs/heads/main/singtel.xml,https://raw.githubusercontent.com/tv1973/xmltv_uk/refs/heads/master/epg.xml,https://raw.githubusercontent.com/AqFad2811/epg/refs/heads/main/indonesia.xml,https://raw.githubusercontent.com/walpak1/epg/refs/heads/gh-pages/sooka.xml,https://raw.githubusercontent.com/AqFad2811/epg/main/epg.xml,https://raw.githubusercontent.com/AqFad2811/epg/main/rtmklik.xml,https://raw.githubusercontent.com/walpak1/epg/refs/heads/gh-pages/singtel.xml,https://raw.githubusercontent.com/dbghelp/mewatch-EPG/refs/heads/main/mewatch.xml" refresh="1440"  " billed-msg=" FREE2026"

#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={"d5249cb40505495494828f42c37087cb":"d59f6a7bed00bd5348355ab5b3ee6aa0" ,"c15541e4dde34c48a0d144a4b0ab7194":"ce82e3d81126183e5a262e320f6348b3"}
#EXTINF:-1 tvg-id="AstroRia" tvg-name="Astro Ria HD" group-title="" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/193_144.png",Ria FHD
#EXTVLCOPT:http-user-agent=com.astro.sookadongle/25.03.12 Dalvik/2.1.0 (Linux; U; Android 12; sooka-TV-v1 Build/STT5.220127.002)
#EXTHTTP:{"Authorization":"Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOjE3NjkwNDg4MzUsImlzcyI6IlZSIiwiZXhwIjoxNzY5MTIxMDAwLCJ3bXZlciI6Mywid21pZGZtdCI6ImFzY2lpIiwid21pZHR5cCI6MSwid21rZXl2ZXIiOjMsIndtdG1pZHZlciI6NCwid21pZGxlbiI6NTEyLCJ3bW9waWQiOjMyLCJ3bWlkIjoiZTA0YjQ5OWQtYWQwNS00NzZlLWEzNzUtOWI4NTg0ZjE3ODU3IiwiZmlsdGVyIjoiKHR5cGU9PVwidmlkZW9cIiYmRGlzcGxheUhlaWdodDw9MjE2MCl8fCh0eXBlPT1cImF1ZGlvXCImJmZvdXJDQyE9XCJhYy0zXCIpfHwodHlwZSE9XCJ2aWRlb1wiJiZ0eXBlIT1cImF1ZGlvXCIpIiwicGF0dGVybiI6IjEwMDQifQ.rTwzP1q2jyCADmFC2A2C2AdY6hKSWOxTmuC7OCDwfJY"}
#https://l05.dp.sooka.my/1004/linear/index.mpd

#EXTINF:-1 tvg-id="AstroRia" tvg-name="Astro Ria HD" group-title="" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/193_144.png",Ria FHD
http://iptvpro.pw:35451/live/%E5%8A%A0QQ%E7%BE%A41067462089/188da255/706.ts

#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={"21759e73f142452aa01acc6d08a86e50":"fc9eaf659647c675315f65747c2553da" ,"6613bc303647468c974c3c839d5201e9":"5422811c83996a25f51229219b41c410"}
#EXTINF:-1 tvg-id="105.astro"  ch-number="105" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/316_144.png" group-title="",PRIMA FHD
#EXTVLCOPT:http-user-agent=com.astro.sookadongle/25.03.12 Dalvik/2.1.0 (Linux; U; Android 12; sooka-TV-v1 Build/STT5.220127.002)
#EXTHTTP:{"Authorization":"Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOjE3NjkwNDg4MzUsImlzcyI6IlZSIiwiZXhwIjoxNzY5MTIxMDAwLCJ3bXZlciI6Mywid21pZGZtdCI6ImFzY2lpIiwid21pZHR5cCI6MSwid21rZXl2ZXIiOjMsIndtdG1pZHZlciI6NCwid21pZGxlbiI6NTEyLCJ3bW9waWQiOjMyLCJ3bWlkIjoiNDE5MWI4YWUtMzczYi00MjBjLWJmNmUtZGMxMTE5ZDAxNTRkIiwiZmlsdGVyIjoiKHR5cGU9PVwidmlkZW9cIiYmRGlzcGxheUhlaWdodDw9MjE2MCl8fCh0eXBlPT1cImF1ZGlvXCImJmZvdXJDQyE9XCJhYy0zXCIpfHwodHlwZSE9XCJ2aWRlb1wiJiZ0eXBlIT1cImF1ZGlvXCIpIiwicGF0dGVybiI6IjEwMDAifQ.fAllQK-ocw2LWuLEIUgy5rz3XKpBHUFGX5-IoQZN7a0"}
#https://l05.dp.sooka.my/1000/linear/index.mpd

#EXTINF:-1 group-title="" group-logo="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMzJmMnB1djl6Mno1MG90bndsczZoNXN0NGx5NXZnbHNjaTM2cGhidSZlcD12MV9naWZzX3NlYXJjaCZjdD1n/mWnDeIKilkwDcrM2VT/giphy.gif" tvg-logo="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMzJmMnB1djl6Mno1MG90bndsczZoNXN0NGx5NXZnbHNjaTM2cGhidSZlcD12MV9naWZzX3NlYXJjaCZjdD1n/mWnDeIKilkwDcrM2VT/giphy.gif",LIVE EVENT 
#EXTVLCOPT:http-referrer=https://xiaolin.live/
#KODIPROP:inputstream.adaptive.stream_headers={"Origin":"https://www.camel1.live","Referer":"https://www.camel1.live/"}
#KODIPROP:inputstream.adaptive.manifest_type=hls
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, seperti Gecko) Chrome/108.0.0.0 Safari/537.36
#https://dl.dropboxusercontent.com/scl/fi/6fw9ub5kgp0t2bxr51r0a/event1.m3u8?rlkey=z4zpx72cdgho6mgcud7nvyokq&st=19kj6cae&dl=0p



#EXTINF:-1 group-title="" group-logo="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMzJmMnB1djl6Mno1MG90bndsczZoNXN0NGx5NXZnbHNjaTM2cGhidSZlcD12MV9naWZzX3NlYXJjaCZjdD1n/mWnDeIKilkwDcrM2VT/giphy.gif" tvg-logo="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMzJmMnB1djl6Mno1MG90bndsczZoNXN0NGx5NXZnbHNjaTM2cGhidSZlcD12MV9naWZzX3NlYXJjaCZjdD1n/mWnDeIKilkwDcrM2VT/giphy.gif",LIVE EVENT 
#EXTVLCOPT:http-referrer=https://xiaolin.live/
#KODIPROP:inputstream.adaptive.stream_headers={"Origin":"https://www.camel1.live","Referer":"https://www.camel1.live/"}
#KODIPROP:inputstream.adaptive.manifest_type=hls
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, seperti Gecko) Chrome/108.0.0.0 Safari/537.36
#https://dl.dropboxusercontent.com/scl/fi/yi4k05tckon970a3anp6g/event2.m3u8?rlkey=buffkfzw8g2zit98m9f9tmgi6&st=lc2zudfu&dl=0




##############################################################################Astro####################################################################################

#EXTINF:-1 tvg-id="101.astro" ch-number="101" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/395_144.png"  group-logo="",101 TV1
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=912760c409eb5aff3e060422c502f410:bea2d0f89fb3fbafa1fc9f34ba8734a6
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 13; UltraBox Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/136.0.7103.61 Mobile Safari/537.36
#https://linearjitp-playback.astro.com.my/dash-wv/linear/711/default_primary.mpd

#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36
#EXTVLCOPT:http-referrer=https://rtmklik.rtm.gov.my/
#EXTINF:-1 tvg-id="101.astro" group-title="" ch-number="101" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/395_144.png"  group-logo="",101 TV1
https://d25tgymtnqzu8s.cloudfront.net/smil:tv1/playlist.m3u8?id=1

#EXTINF:-1 tvg-id="102.astro" ch-number="102" tvg-logo="https://resizer-acm.eco.astro.com.my/tr:w-128,q:75/https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/396_144.png",102 TV2
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=4f885481fe053e544096532c1dcb9710:24a9b17859862887f28f63c7c29bcaa5
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 13; UltraBox Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/136.0.7103.61 Mobile Safari/537.36
https://linearjitp-playback.astro.com.my/dash-wv/linear/5027/default_primary.mpd


#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"X842T7xEmYVll7GalvRGSA", "kid":"O8Pw5Riu2S6AqYEY5bwsEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="TV3" ch-number="103" tvg-name="TV3" group-title="" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/106_144.png",TV3 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 10; MiTV-AXSO0 Build/QTZCS200912.005) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36
https://linearjitp-playback.astro.com.my/dash-wv/linear/809/default_primary.mpd






#EXTINF:-1 tvg-id="106.astro" ch-number="106" group-title="" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/315_144.png",106 Astro Oasis
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=17d5d62dc61954b82ee016da264abd10:5f35f815699140e2649d825f0d24028e
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 13; UltraBox Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/136.0.7103.61 Mobile Safari/537.36
https://linearjitp-playback.astro.com.my/dash-wv/linear/2505/default_primary.mpd


#EXTINF:-1 tvg-id="149.astro". ch-number="109" tvg-logo="https://ott-1.ottnavi99.workers.dev/0:/ott-1/TV9.png" group-logo="" group-title="",109 TV9 HD 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"Zfavh1DSSyMNkbmEI3rB5A", "kid":"HfqKZFr0HoPFIL3fkTk0yg" } ], "type":"temporary" }
https://unifi-live07.secureswiftcontent.com/UnifiHD/live09.mpd


#KODIPROP:inputstream.adaptive.license_type=clearkey
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 13; AndroidTV Build/V3.2025; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/136.0.7103.61 Mobile Safari/537.36
#KODIPROP:inputstream.adaptive.license_key=41a42fb5af457501c11bb9b158d5a110:57a8d6f9e3832887db18ea6071118736
#EXTINF:-1 tvg-id="114.astro" ch-number="114" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/149_144.png" group-title="",114 Al-Hijrah
http://linearjitp-playback.astro.com.my/dash-wv/linear/1113/default_primary.mpd

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey 
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"btm0l2qFSiic5iyslXpV1Q", "kid":"rTyyQs3jtofiOYzSHrm9EA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="116.astro" ch-number="116" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/365_144.png" group-title="",116 Colors Hindi 
https://linearjitp-playback.astro.com.my/dash-wv/linear/2611/default_primary.mpd

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"IPOS5aECG+aPwyvNuew61A", "kid":"25ZIOQB2LiM6p4MEV6DTEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="117.astro" ch-number="117" group-title="" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/490_144.png",117 Zee Cinema 
https://linearjitp-playback.astro.com.my/dash-wv/linear/5106/default_primary.mpd


#EXTINF:-1 tvg-id="SUKANRTM.mana2" ch-number="121" tvg-logo="https://rtm-images.glueapi.io/120x0/live_channel/sukan_Trans.png" group-logo="" group-title="",121 Sukan RTM
https://d25tgymtnqzu8s.cloudfront.net/smil:sukan/chunklist.m3u8?id=1|Referer=https://rtmklik.rtm.gov.my


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"Vcyu6IazQN2QH0v43Z06ag", "kid":"w+lWs4rpk74UlMfPoXsREA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="122.astro"  ch-number="122"  tvg-logo="https://pictr.com/images/2024/01/04/EXDx1q.png" group-logo="" group-title="",122 TVS
https://linearjitp-playback.astro.com.my/dash-wv/linear/5021/default_primary.mpd

#EXTINF:-1 tvg-id="Awesome" ch-number="123" tvg-name="" tvg-logo="https://res.cloudinary.com/dcpdjee3i/image/upload/v1759309786/Awesome_TV_Malaysia_rvqjoe.png" group-title="",123 Awesome TV
http://216.132.70.171:8080/live/vip_rhfmytw3/S1A5heso/2708.ts?channel=awesome
http://83.142.30.171:8080/live/vip_3klp0es8/wg3piwEs/2708.ts

#EXTINF:-1 tvg-id="TV6" ch-number="126" tvg-logo="https://rtm-images.glueapi.io/480x0/live_channel/tv6_Trans.png" group-title="",126 TV6
https://mifntechnology.github.io/siaranMy/channels/Tv6/index.m3u8

#EXTINF:-1 tvg-id="JomNgaji" ch-number="130"   tvg-logo="https://res.cloudinary.com/dcpdjee3i/image/upload/v1759311239/Sooka_Jom_Ngaji_a1ceke.png" group-title="",130 Jom Ngaji
https://b27a6dd8a86c3e4ba93fbae22aaaac64.pmqrop.channel-assembly.mediatailor.ap-southeast-1.amazonaws.com/v1/channel/FAST_6/dash.mpd

#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#EXTINF:-1 tvg-id="FilemMantap" ch-number="131" tvg-logo="https://telegra.ph/file/7b071d2ccbc3052b82cd1.png",131 Filem Mantap
https://b27a6dd8a86c3e4ba93fbae22aaaac64.pmqrop.channel-assembly.mediatailor.ap-southeast-1.amazonaws.com/v1/channel/FAST_2/dash.mpd


#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#EXTINF:-1 tvg-id="DramaHebat" ch-number="132" tvg-logo="https://telegra.ph/file/d2f120faedec1a128846b.png",132 Drama Hebat
https://b27a6dd8a86c3e4ba93fbae22aaaac64.pmqrop.channel-assembly.mediatailor.ap-southeast-1.amazonaws.com/v1/channel/FAST_1/dash.mpd


#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#EXTINF:-1  tvg-id="DramaHotpot" ch-number="133"  tvg-logo="https://telegra.ph/file/444552edb8dc56b75f79e.png",133 Drama Hotpot
https://b27a6dd8a86c3e4ba93fbae22aaaac64.pmqrop.channel-assembly.mediatailor.ap-southeast-1.amazonaws.com/v1/channel/FAST_4/dash.mpd

#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#EXTINF:-1 tvg-id="LawakSentral"  ch-number="134"  tvg-logo="https://telegra.ph/file/12bc717e3ee372f2a62e8.png",134 Lawak Sentral
https://b27a6dd8a86c3e4ba93fbae22aaaac64.pmqrop.channel-assembly.mediatailor.ap-southeast-1.amazonaws.com/v1/channel/FAST_3/dash.mpd

#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#EXTINF:-1 tvg-id="TravelTaste" ch-number="135" tvg-logo="https://res.cloudinary.com/dcpdjee3i/image/upload/v1759311320/Sooka_Travel___Taste_ofrzut.png" group-title="",135 Travel & Taste
https://b27a6dd8a86c3e4ba93fbae22aaaac64.pmqrop.channel-assembly.mediatailor.ap-southeast-1.amazonaws.com/v1/channel/FAST_5/dash.mpd


#EXTINF:-1 tvg-id="146.astro" ch-number="146" tvg-logo="https://rtm-images.glueapi.io/120x0/live_channel/okey_Trans.png" group-logo="" group-title="",146 Okey
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=60f202b16407fedd8e369c32af57dd10:c8475231c09dc1b639886976b6fc7575
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 13; UltraBox Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/136.0.7103.61 Mobile Safari/537.36
https://linearjitp-playback.astro.com.my/dash-wv/linear/5072/default_primary.mpd

#EXTINF:-1 tvg-id="147.astro" ch-number="147" group-logo="" group-title="" tvg-logo="https://headend-api.tonton.com.my/v100/imageHelper.php?id=6420324:378:CHANNEL:IMAGE:png&w=200&appID=TONTON",147 NTV7
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"4EDKKqQm33ibo4S6VhiRtA", "kid":"R6Ega0SCLIkyDnCRbPV7DA" } ], "type":"temporary" }
#EXTVLCOPT:http-referrer=https://playtv.unifi.com.my/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:127.0) Gecko/20100101 Firefox/127.0
https://unifi-live01.secureswiftcontent.com/UnifiHD/live06.mpd

#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"BW4eSVc9LK7ly0/nj4xPPQ", "kid":"qcYZB07TjCDiWtNsPFfBDA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="108.unifi" ch-number="148" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/115_144.png" group-logo="" group-title="",148 8TV 
https://unifi-live07.secureswiftcontent.com/UnifiHD/live08.mpd

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"tUFjJhFKE+kGYqT7rzxTKw", "kid":"ckmcatRMw32VqQdUIJEREA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="201.astro" ch-number="201" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/397_144.png" group-title="",201 Vaanavil
https://linearjitp-playback.astro.com.my/dash-wv/linear/2309/default_primary.mpd
 
#EXTINF:-1 tvg-id="202.astro"  ch-number="202"  tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/167_144.png" group-title="",202 Astro Vinmeen
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c7737edd1d67824fa70df73154bf8110:68c5db3b309fab5503a6fdb580ddf281
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 13; UltraBox Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/136.0.7103.61 Mobile Safari/537.36
http://linearjitp-playback.astro.com.my/dash-wv/linear/2105/default_primary.mpd
https://shortenurl.org/3Vin

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={9c44af8b594b6157f55d3c31bd679c10:c128bbe41e94d15a7f8cc2f6253a54b2}
#EXTINF:-1 tvg-id="203.astro" ch-number="203" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/399_144.png" group-title="",203 Vellithirai
https://linearjitp-playback.astro.com.my/dash-wv/linear/5073/default_primary.mpd



#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"URkFvxkUdLQStOwRdRWnnA", "kid":"5GNU+znCjllWvJRqwqBQEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="222.astro" ch-number="222" tvg-name="Colors Tamil HD" group-title="" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/298_144.png",222 COLORS TAMIL 
https://linearjitp-playback.astro.com.my/dash-wv/linear/2101/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"Znoz9NW7NYfy1SCYhoOerA", "kid":"DU4+fawtWLk7+BmnL+jVEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="223.astro" ch-number="223" tvg-name="Zee Tamil HD" group-title="" group-logo="https://astrogo.astro.com.my/staticFiles/images/icons/fav-icon.png" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/297_144.png",223 ZEE TAMIL 
https://linearjitp-playback.astro.com.my/dash-wv/linear/2311/default_primary.mpd


#EXTINF:-1 tvg-id="105" ch-number="254"  tvg-logo="https://poster.starhubgo.com/Linear_channels2/105_1920x1080_HTV.png" group-logo="" group-title="",254 Vasantham
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=fb3e1afa8ae545f5a99d40baefd8a8d8:6432f742cd17eb5aedc3d68a3a61079c
https://tglmp01.akamaized.net/out/v1/8605c1013e3148aa809c296dd76c3fa5/manifest.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"d9mO1x23Ukwnh1oJqXX55g", "kid":"fvfpE86FoRMbJwNgaRaaEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="300.astro" ch-number="300" tvg-logo="https://linear-poster.astro.com.my/prod/logo/IQIYI_2022.png" group-title="",300 iQIYI 
https://linearjitp-playback.astro.com.my/dash-wv/linear/1006/default_primary.mpd


#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 13; UltraBox Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/136.0.7103.61 Mobile Safari/537.36
#EXTINF:-1 tvg-id="306.astro" ch-number="306" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/182_144.png" group-logo="" group-title="",306 AEC
#KODIPROP:inputstream.adaptive.license_type=clearkey
##KODIPROP:inputstream.adaptive.license_key=655b6df8085d4fe6b3f71c0f4288f98a:5f0d4251e05e0a3a661218169ee84181
#KODIPROP:inputstream.adaptive.license_key=06282157da4e8f97623a70ed017fad10:8da72ca8501a4deb4bfc381fe1737ef4
https://linearjitp-playback.astro.com.my/dash-wv/linear/2400/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#EXTINF:-1 tvg-id="308.astro"  ch-number="308" tvg-name="Astro Quan Jia HD" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/158_144.png",308 Astro Quan Jia HD
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=89de71cf39be0946dec828edff84d010:9d5e036094bb77cbaf8867d3272c66d0
http://linearjitp-playback.astro.com.my/dash-wv/linear/2507/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"NhGXgF0BScKYAZRs8t3mfA", "kid":"xcG6JpByka/sEamnjVE0EA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="309.astro"  ch-number="309" tvg-logo="https://linear-poster.astro.com.my/prod/logo/Celestial_HD_v1.png" group-logo="" group-title="",309 Celestial Movies 
https://linearjitp-playback.astro.com.my/dash-wv/linear/506/default_primary.mpd

#EXTINF:-1 tvg-id="319.astro" ch-number="319" group-title="" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/383_144.png",319 TVB Xing He
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=e36e0cbdef0677b48dba5c63e8caaf10:ecfb454b2f3e238c5b5dc196e4f91fb8
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 13; UltraBox Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/136.0.7103.61 Mobile Safari/537.36
https://linearjitp-playback.astro.com.my/dash-wv/linear/401/default_primary.mpd

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#EXTINF:-1 tvg-id="321.astro" ch-number="321" tvg-logo="http://linear-poster.astro.com.my/prod/logo/CCM_v1.png" group-logo="" group-title="",321 Celestial Classic Movies
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"P1k1XhXu0bshnqFofVXPuw", "kid":"pkLdS/PqeC4ZICre+2BLEA" } ], "type":"temporary" }
https://linearjitp-playback.astro.com.my/dash-wv/linear/100/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={60507ef0dc9c813d5f8c7b2229412f10:c8a0f7e69bb31dfd475da26fc6c6003b}
#EXTINF:-1 tvg-id="333.astro" ch-number="333" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/162_144.png" group-logo="" group-title="",333 Hua Hee Dai
https://linearjitp-playback.astro.com.my/dash-wv/linear/2308/default_primary.mpd

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#EXTINF:-1 tvg-id="392.astro" ch-number="392"  tvg-logo="https://linear-poster.astro.com.my/prod/logo/KBSW_v1.png" group-title="",392 KBS World
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=692950d39869c92af9a9ddea453c0d10:eadc626ab959255f7ab881c03d306fe2
http://linearjitp-playback.astro.com.my/dash-wv/linear/2306/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"Red+aounZ7Y8rP2wHvKsKQ", "kid":"2P45jHkGUXP6l4jyJgVlEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="393.astro" ch-number="393" tvg-logo="https://www.onetvasia.com/sites/onetvasia.com/files/logos/onetvasia-logo.png" group-title="",393 One HD
https://linearjitp-playback.astro.com.my/dash-wv/linear/2702//default_primary.mpd


#EXTINF:-1 tvg-id="USBB2900001P9" ch-number="394" tvg-logo="https://i.namu.wiki/i/A8eY4vZ-YvrYILY6ZZHNCthPLEsxoZl74cNg2y11PlS7R6cGSikWw-4QNSOdFwi7Rh2orCaKNggeg0xmdmBLRw.webp" group-title="",394 K-Stories
https://d50a1g0nh14ou.cloudfront.net/v1/master/3722c60a815c199d9c0ef36c5b73da68a62b09d1/CJ-ENM-prod/e91c6419_2e45_4f6c_a646_b912658d73b8/hls/playlist.m3u8


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"GegOzF0zchXGQATLScnLAQ", "kid":"+vTWK7iY3lA0RsKPsaqSEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="395.astro" ch-number="395" tvg-logo="http://linear-poster.astro.com.my/prod/logo/tvN_2021.png" group-title="",395 tvN
https://linearjitp-playback.astro.com.my/dash-wv/linear/1001/default_primary.mpd

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#EXTINF:-1 tvg-id="396.astro" ch-number="396"  tvg-logo="https://linear-poster.astro.com.my/prod/logo/K-Plus_v1.png" group-title="",396 K+
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=aa48b28bd723f91214887df6ed9fad10:b5a3a800848120c843ae0fa68c09c261
http://linearjitp-playback.astro.com.my/dash-wv/linear/9983/default_primary.mpd

#KODIPROP:inputstream.adaptive.license_type=clearkey
#EXTVLCOPT:http-user-agent=ExoPlayerDemo/2.15.1 (Linux; Android 13) ExoPlayerLib/2.15.1
#KODIPROP:inputstream.adaptive.license_key=ecc5bc0e2dec4b9495db147278fb3904:ca86d9fdad6a8e9b1c13368d734e2095
#EXTINF:-1 tvg-id="472.unifi" tvg-name="" tvg-logo="https://headend-api.tonton.com.my/v210/imageHelper.php?id=6462242:378:CHANNEL:IMAGE:png&w=150&appID=TONTON" group-title="" ch-number="398",398 Animax
https://kelontong.semar.my.id/fmx.mpd?id=animaxhd&auth=animaxhdsemar25
https://atemecdnbalancer-voe.sysln.id/live/eds/AnimaxHD/mpd/AnimaxHD.mpd

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"OPv7OlbkD/ksnfisvLqe9g", "kid":"/x/r1wGNDdcRYB55Xg1iEA" } ], "type":"temporary" }
#EXTINF:-1 ch-number="401" tvg-id="401.astro" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/391_144.png" group-logo="" group-title="",401 Hits Movies    
https://linearjitp-playback.astro.com.my/dash-wv/linear/2305/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"8/hCxUzJbLvQvLlqTLioEw", "kid":"oJiJbSsRxfOQapk8O6XGEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="411.astro" ch-number="411" tvg-logo="https://images.now-tv.com/shares/channelPreview/img/en_hk/color/ch115_160_115" group-title="",411 HBO
https://linearjitp-playback.astro.com.my/dash-wv/linear/2304/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"E8xTWtSnMgEUeGPKw4bN0w", "kid":"79sqjTkVHMOfS1HXYs+cEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="412.astro" ch-number="412" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/337_144.png" group-title="",412 Cinemax
https://linearjitp-playback.astro.com.my/dash-wv/linear/603/default_primary.mpd

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"yg0YU4hFuuLLT0oWgDbxdA", "kid":"uAkMg2HMXMXBqsDsJxDeEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="413.astro" ch-number="413" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/454_144.png" group-title="",413 Showcase Movies 
https://linearjitp-playback.astro.com.my/dash-wv/linear/5054/default_primary.mpd



#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"fjdYjok6uSUuUFvW3aNb6w", "kid":"K5/3zBo9yf70fMV3NHLVEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="414.astro" ch-number="414"  tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/450_144.png" group-logo="" group-title="",414 HBO Family   
https://linearjitp-playback.astro.com.my/dash-wv/linear/5053/default_primary.mpd

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"eWE5ugWiq0Jfl4x/2YtDcg", "kid":"XWAOtwlE1oHCbB9I++YfEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="415.astro" ch-number="415" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/449_144.png" group-title="",415 HBO Hits
https://linearjitp-playback.astro.com.my/dash-wv/linear/5055/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#EXTINF:-1 tvg-id="416.astro" ch-number="417" tvg-name="tvN Movies HD" group-title="" group-logo="https://i.ibb.co/nk1ts88/9984-B0-C3-CD7-F-4-C62-ADAB-FCB1-FEF464-D1.jpg" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/274_144.png",417 tvN Movies 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"0SzOuvu6KlNdiKMIf4hCUg", "kid":"jiaciqMq1364MGgxI0PWEA" } ], "type":"temporary" }
http://linearjitp-playback.astro.com.my/dash-wv/linear/2406/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"UlUQz6Y0vWMK+MlfqTV2yg", "kid":"bwbzs898utDMiyHiyU37EA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="501.astro" ch-number="501" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/436_144.png" group-logo="" group-title="",501 Awani  
https://linearjitp-playback.astro.com.my/dash-wv/linear/5025/default_primary.mpd


#KODIPROP:inputstreamaddon=inputstream.adaptive
#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"d1plTAYQgRrQIjKaaIhN4Q", "kid":"FovYFUaGOf5FKLS/AUHzEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="550.astro"  ch-number="550" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/483_144.png" group-logo="" group-title="",550 Love Nature
https://linearjitp-playback.astro.com.my/dash-wv/linear/5096/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#EXTINF:-1 tvg-id="552.astro" ch-number="552" tvg-name="Discovery Channel HD" group-title="" group-logo="https://astrogo.astro.com.my/staticFiles/images/icons/fav-icon.png" tvg-logo="https://pictr.com/images/2023/07/24/EbLDYf.png",552 DISCOVERY CHANNEL
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"A++I3xpHZp5UWeEF47U1sQ", "kid":"J2dnpXiq4urLKEJHzNnrEA" } ], "type":"temporary" }
https://linearjitp-playback.astro.com.my/dash-wv/linear/2510/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#EXTINF:-1 tvg-id="553.astro" ch-number="553" tvg-name="Discovery Asia HD" group-title="" group-logo="https://astrogo.astro.com.my/staticFiles/images/icons/fav-icon.png" tvg-logo="https://pictr.com/images/2023/07/24/EbV0E9.png",553 DISCOVERY ASIA
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"w6WOyGfMJYKeH76JOEQlUw", "kid":"P/AvzYDC4yMMUq5w/pA0EA" } ], "type":"temporary" }
https://linearjitp-playback.astro.com.my/dash-wv/linear/501/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#EXTINF:-1 tvg-id="554.astro" ch-number="554" tvg-name="BBC Earth" group-title="" group-logo="https://astrogo.astro.com.my/staticFiles/images/icons/fav-icon.png" tvg-logo="https://www.storylandstudios.com/wp-content/uploads/2017/11/bbc-earth-logo.png",554 BBC EARTH 
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"uxvbJ8xf4exjfSV5mTRMww", "kid":"2/Yv8IBLxbjVI+8AnXhjEA" } ], "type":"temporary" }
https://linearjitp-playback.astro.com.my/dash-wv/linear/5051/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#EXTINF:-1 tvg-id="555.astro" ch-number="555" tvg-name="History HD" group-title="" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/144_144.png" ch-number="555",555 History 
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"NFgmX3Uwvx/vIEyoy0aJ2w", "kid":"P+7MNpMHMsu2kwbcaHxvEA" } ], "type":"temporary" }
https://linearjitp-playback.astro.com.my/dash-wv/linear/604/default_primary.mpd

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={5082ef4a1f53079360ed8283bbe05c10:9a837b648a223d23ff05045972dbb6ae}
#EXTINF:-1 tvg-id="556.astro"  ch-number="556" tvg-logo="http://linear-poster.astro.com.my/prod/logo/CGTN_DOC.png" group-title="",556 CGTN Documentary
https://linearjitp-playback.astro.com.my/dash-wv/linear/5119/default_primary.mpd


#EXTINF:-1 tvg-id="5208"  ch-number="557"   tvg-logo="https://wildaid.org/wp-content/uploads/2021/08/animal-planet-logo-white.png" group-title="",557 Animal Planet
#EXTVLCOPT:http-user-agent=ExoPlayerDemo/2.15.1 (Linux; Android 13) ExoPlayerLib/2.15.1
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=fe0d35dd7f2045e58bfdfeea879a8ae9:6a61e84d6c9147aa68c06d68f1d7b218
https://kelontong.semar.my.id/fmx.mpd?id=animalplanethd&auth=animalplanethdsemar25
https://atemecdnbalancer-voe.sysln.id/live/eds/AnimalPlanetHD/mpd/AnimalPlanetHD.mpd


#EXTINF:-1 tvg-id="OhMyCeria" ch-number="601" group-title="" group-logo="" tvg-logo="https://pictr.com/images/2024/05/03/EsLrnD.png",601 Oh My Ceria! 
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
https://b27a6dd8a86c3e4ba93fbae22aaaac64.pmqrop.channel-assembly.mediatailor.ap-southeast-1.amazonaws.com/v1/channel/FAST_7/dash.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"rtncAgOHJarb0Me9FwkkCw", "kid":"iCm49NkdJjDzmMZ+2UwjEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="603.astro"  ch-number="603"   tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/411_144.png" group-title="",603 Astro Tutor TV
https://linearjitp-playback.astro.com.my/dash-wv/linear/5071/default_primary.mpd

#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={b6e60ca0d28e8f97395f07b4e2e53a10:0f0ea6c3543c29d7f513eb886eb74f88}
#EXTINF:-1 tvg-id="611.astro" tvg-logo="https://linear-poster.astro.com.my/prod/logo/AstroCeria_2024.png" group-title="", ceria
https://linearjitp-playback.astro.com.my/dash-wv/linear/2606/default_primary.mpd
https://load.perfecttv.net/rwt.mpd?username=vip_vjwcvhsz&password=5Tm80txU&channel=ceria

#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-referrer=https://www.mana2.my/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (X11; CrOS x86_64 13904.97.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.167 Safari/537.36
#KODIPROP:inputstream.adaptive.license_key=https://widevine-dash.ezdrm.com/proxy?pX=4FBC27
#EXTINF:-1 tvg-id="ZOOMOO.mana2" group-title="" ch-number="614" tvg-logo="https://tvpnlogopus.samsungcloud.tv/platform/image/sourcelogo/vc/00/02/34/USBC2400019EF_20240520T214904SQUARE.png",614 ZOO MOO
https://slive.mana2.my/ZooMoo/index.mpd?hdnts=st=1749646200~exp=1749667800~acl=!*/ZooMoo/*!/payload/yupptvott_5_25058_a46b5d78-a4e0-9312-5fcb-b658136e6003_MY_14.1.246.119_mytv_1_channel_97_-1/*~data=yupptvott_5_25058_a46b5d78-a4e0-9312-5fcb-b658136e6003_MY_14.1.246.119_mytv_1_channel_97_-1~hmac=7a348e6fe9a43a4768cc76915dfc3bf26cd9488d6edceb48b3b88f8aea7e7db6

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"icX/n45lx/6WavvS+RKOXw", "kid":"GgW+v3BkCEMaOQw/n0D0EA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="615.astro" ch-number="615" tvg-logo="https://poster.starhubgo.com/Linear_channels2/316_1920x1080_HTV.png" group-logo="" group-title="",615 Cartoon Network
https://linearjitp-playback.astro.com.my/dash-wv/linear/509/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"vaX3u8HkQJb3eaBhn+mIHw", "kid":"2FIOlqEoOrblvlOEdL+oEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="616.astro" ch-number="616"  tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/370_144.png" group-logo="" group-title="",616 Nickelodeon 
https://linearjitp-playback.astro.com.my/dash-wv/linear/2511/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"tKu+6Vtps+gKDRQScshw2w", "kid":"+mUiDJ925CQXOJnfUzptEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="617.astro"  ch-number="617"  tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/392_144.png" group-logo="" group-title="",617 Nickelodeon Junior
https://linearjitp-playback.astro.com.my/dash-wv/linear/9982/default_primary.mpd

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#EXTINF:-1 tvg-id="618.astro"  ch-number="618" tvg-logo="http://linear-poster.astro.com.my/prod/logo/Moonbug_V1.png" group-logo="" group-title="",618 Moonbug Kids
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={"keys":[{"kty":"oct","k":"irCTravcNDuHNLfs8K6hGg","kid":"48t0mXEHhusQX6t7UkWZEA"}],"type":"temporary"}
https://linearjitp-playback.astro.com.my/dash-wv/linear/5067/default_primary.mpd



#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"USSZbrz+4He0qs7DB/ONDw", "kid":"sRGeAbZ6GaPrN8QRQMP6EA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="619.astro" ch-number="619" group-title="" tvg-logo="https://linear-poster.astro.com.my/prod/logo/Blippi&Friends.png",619 Blippi & Friends
https://linearjitp-playback.astro.com.my/dash-wv/linear/5175/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"3mxf6q5faWO0s5LdyLaneA", "kid":"UMaZxETl+A2sr8TJlmfYEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="620.astro" ch-number="620" group-title="" group-logo="https://astrogo.astro.com.my/staticFiles/images/icons/fav-icon.png" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/481_144.png" group-title="Malaysia Channel",620 CBEEBIES    
https://linearjitp-playback.astro.com.my/dash-wv/linear/5093/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={c24a7811d9ab46b48b746a0e7e269210:c321afe1689b07d5b7e55bd025c483ce}
#EXTINF:-1 tvg-id="701.astro" ch-number="701" tvg-logo="http://linear-poster.astro.com.my/prod/logo/AXN_v1.png" group-title="",701 AXN  
https://linearjitp-playback.astro.com.my/dash-wv/linear/2303/default_primary.mpd

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#EXTINF:-1 ch-number="702" tvg-id="702.astro" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/524_144.png" group-logo="" group-title="",702 Hits Now
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=4307def6a29bec082f8c93f1f98e5910:a4d49bda8cd29ba2888c732b4e7d9d63
http://linearjitp-playback.astro.com.my/dash-wv/linear/5110/default_primary.mpd



#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#EXTINF:-1 tvg-id="703.astro" ch-number="703" tvg-logo="https://linear-poster.astro.com.my/prod/logo/Lifetime.png" group-logo="https://astrogo.astro.com.my/staticFiles/images/icons/astroLogo.png" group-title="",703 Lifetime
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"GDs+r6TILmj3TEJE1UkGsA", "kid":"jeEeAF21vQ24IogUhjzTEA" } ], "type":"temporary" }
https://linearjitp-playback.astro.com.my/dash-wv/linear/5052/default_primary.mpd

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"NssgY79TONGNMWVzcbFYFw", "kid":"H+kmhadYRNxUydrBJIAlEA" } ], "type":"temporary" }
#EXTINF:-1 group-title="" group-logo="https://pictr.com/images/2023/04/18/Eniy56.png" tvg-id="706.astro" ch-number="706" tvg-logo="https://pictr.com/images/2024/11/06/xi93LI.png",706 HITS  
https://linearjitp-playback.astro.com.my/dash-wv/linear/606/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"f15saWmN3vy3RVNDGyscmA", "kid":"lC7BViA7Ksod3zSY9mPBEA" } ], "type":"temporary" }
#EXTINF:-1 group-title="" group-logo="https://pictr.com/images/2023/04/18/EniO1q.png" tvg-id="707.astro" ch-number="707" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/338_144.png",707 TLC
https://linearjitp-playback.astro.com.my/dash-wv/linear/2709/default_primary.mpd


#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=6dc31ac1031242a8b0c37286acb66a37:648286167b494bf9ee122eced0e37de1
#EXTVLCOPT:http-user-agent=ExoPlayerDemo/2.15.1 (Linux; Android 13) ExoPlayerLib/2.15.1
#EXTINF:-1 group-title="" group-logo="" tvg-id="5252" ch-number="708" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/153_144.png",708 Food Network
https://atemecdnbalancer-voe.sysln.id/live/eds/FoodNetworkHD/mediampd/FoodNetworkHD.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#EXTINF:-1 group-title="" group-logo="https://pictr.com/images/2023/04/18/EniO1q.png" tvg-id="709.astro" ch-number="709" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/91_144.png",709 Asian Food Network
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"zwz/tje4FZiie9aw2Q1lqA", "kid":"NGufQeKTN0jIhh+Cky4BEA" } ], "type":"temporary" }
https://linearjitp-playback.astro.com.my/dash-wv/linear/500/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"2x7iuJlLkarGUEnvPkk3hw", "kid":"Ivxbr0euO2MivCRCBruyEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="714.astro" ch-number="714" group-title="" group-logo="" tvg-logo="https://iili.io/1NoZ22.png",714 Crime & Investigation
https://linearjitp-playback.astro.com.my/dash-wv/linear/2111/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"KmlbBG589YEaY00TSEQRlQ", "kid":"jBuzCZVe7jKII5Cr6+GYEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="HGTV" ch-number="715" tvg-name="HGTV" ch-number="715" group-title="" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/198_144.png" ch-number="715",715 HGTV 
https://linearjitp-playback.astro.com.my/dash-wv/linear/2502/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"sS4fiUEpxRfciEW6ruvsig", "kid":"9CkpLcdE8oQ1UwhWFXesEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="717.astro" ch-number="717"  tvg-logo="https://linear-poster.astro.com.my/prod/logo/BBC_Lifestyle.png" group-logo="https://astrogo.astro.com.my/staticFiles/images/icons/astroLogo.png" group-title="",717 Lifestyle 
https://linearjitp-playback.astro.com.my/dash-wv/linear/5050/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#EXTINF:-1 tvg-id="718.astro" ch-number="718" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/420_144.png",718 MTV Live
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={3ac2542a4f7be746633db07647451710:22f964a6d6927ccdba482e775cdff190}
http://linearjitp-playback.astro.com.my/dash-wv/linear/5014/default_primary.mpd



#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=4035323a7fe64767ab8f3345ed9b93be:67377b8d429603f8bf30c161bda269e5
#EXTINF:-1 tvg-id="SoccerChannel.id" ch-number="800"  tvg-logo="https://www.visionplus.id/images/repository/655/655-LOGO-m.png" group-title="",800 Soccer Channel
https://fta4-cdn-flr.visionplus.id/out/v1/63c0da12bb4d48afbaf053f51dff2353/index.mpd|Referer=https://www.visionplus.id/&user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36


 
#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={efda647dad723563b625be8c05ee6110:6776985938b332164b97b81fe566a34a}
#EXTINF:-1 tvg-id="801.astro" ch-number="801"  tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/235_144.png" group-title="",801 Astro Arena
https://linearjitp-playback.astro.com.my/dash-wv/linear/2604//default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ead0335d60401225727a6d531e9c2710:1ee3b252227c5c2ec9378c833d2e14ff}
#EXTINF:-1 tvg-id="802.astro"  ch-number="802" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/457_144.png" group-title="",802 Astro Arena 2
https://linearjitp-playback.astro.com.my/dash-wv/linear/5057//default_primary.mpd


#EXTINF:-1 tvg-id="805.astro"  ch-number="805"  tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/308_144.png",805 Astro Supersport UHD 
#KODIPROP:inputstreamaddon=inputstream.adaptive
#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key={"keys":[{"kty":"oct","k":"eupDzZPCSqmDTstJhPf9Wg","kid":"IvvvHBzXJek5fsFkVfCCEA"}],"type":"temporary"}
https://linearjitp-playback.astro.com.my/dash-wv/linear/1601/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey 
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"gFWGBqE6mdLFQ4ctiJnO0A", "kid":"icEMfvCvFFvn1uiN7AkLEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="809.astro" ch-number="809" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/542_144.png" group-logo="https://astrogo.astro.com.my/staticFiles/images/icons/astroLogo.png" group-title="",809 Astro Sports Plus
https://linearjitp-playback.astro.com.my/dash-wv/linear/5076/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#EXTINF:-1 tvg-id="810.astro"  ch-number="810" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/543_144.png" group-title="",810 Astro Grandstand
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=5be66a6f88efee3d6e30f72a9c58e310:168f3fadfc730ba3dfc932f7c430e27d
https://linearjitp-playback.astro.com.my/dash-wv/linear/2701/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={1ece3ecb41699e855c6dc9a283908210:ba08be767e1a5e89777e68a6998a8c19}
#EXTINF:-1 tvg-id="813.astro" ch-number="813" tvg-name="813 Astro Premier League 3" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/538_144.png" ch-number="813",813 Astro Premier League 3
https://linearjitp-playback.astro.com.my/dash-wv/linear/5108/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#EXTINF:-1 tvg-id="814.astro" ch-number="814" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/539_144.png" group-title="",814 Astro Football
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"kf6+hDwIx8xSPv2CcpLkDg", "kid":"efQChzCsypq4sA8mFY3bEA" } ], "type":"temporary" }
https://linearjitp-playback.astro.com.my/dash-wv/linear/2506/default_primary.mpd

 
#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#EXTINF:-1 tvg-id="816.astro"  ch-number="816" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/541_144.png" group-title="",816 Astro Badminton 2
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"F8Ga1nClV+aIJBnWkj+tJw", "kid":"cq1uqhkEVAE4SH//o61lEA" } ], "type":"temporary" }
https://linearjitp-playback.astro.com.my/dash-wv/linear/5172/default_primary.mpd



#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={81352bc47ec1177b321ee65ac1be7f10:c8b886142005d7e5067c8717777eaac4}
#EXTINF:-1 tvg-id="817.astro" ch-number="817"  tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/542_144.png" group-title="",817 Astro Sports Plus
https://linearjitp-playback.astro.com.my/dash-wv/linear/5171/default_primary.mpd

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={3225f837a4b95d6e46683c53818c1710:3e1b57c06699c7e408e7aa49ff57d4f4}
#EXTINF:-1 tvg-id="818.astro" ch-number="818"   tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/568_144.png" group-title="",818 Astro Premier League 4
https://linearjitp-playback.astro.com.my/dash-wv/linear/5111/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={229670469469aa6f78bc5bbe10071810:3b3ede68e8bb9d0d4e3b4517c422cccf}
#EXTINF:-1 tvg-id="819.astro" ch-number="819"  tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/570_144.png" group-title="",819 Astro Premier League 5
https://linearjitp-playback.astro.com.my/dash-wv/linear/5113/default_primary.mpd

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={1a655189ab5c49eb235308c2b1a9e710:3c4508af348844107f5e026a4fd6b16e}
#EXTINF:-1 tvg-id="820.astro" ch-number="820" tvg-logo="https://linear-poster.astro.com.my/prod/logo/beINSPORT1.png" group-title="",820 beIN Sports
https://linearjitp-playback.astro.com.my/dash-wv/linear/408/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={39c175581e237eff9559607eb9b23c10:5102b12aac7756c65dcb46a101d960d3}
#EXTINF:-1 tvg-id="821.astro" ch-number="821" tvg-logo="https://linear-poster.astro.com.my/prod/logo/beINSPORTS2.png" group-title="",821 beIN Sports 2
https://linearjitp-playback.astro.com.my/dash-wv/linear/5066/default_primary.mpd

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={20c884ef8ed26b2762f8b1a78f2d1910:042a21bf236ca729b1e343ed6e0a6337}
#EXTINF:-1 tvg-id="822.astro" ch-number="822"  tvg-logo="https://linear-poster.astro.com.my/prod/logo/beIN_SPORTS3_V2.png" group-title="",822 beIN Sports 3
#https://linearjitp-playback.astro.com.my/dash-wv/linear/2705/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={c0e1804aa1d9fd9c41c41bf0f61a5f10:758823e4eabb6e4c8c036d073db46b8c}
#EXTINF:-1 tvg-id="823.astro"  ch-number="823" tvg-logo="https://linear-poster.astro.com.my/prod/logo/SPOTV.png" group-title="",823 SPOTV
#https://linearjitp-playback.astro.com.my/dash-wv/linear/5058/default_primary.mpd

 
#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"7W1n2VPRSwJrJgLPiEZXfg", "kid":"Xv0m2lABNjtNb6SpyBKtEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="824.astro"  ch-number="824" tvg-logo="https://linear-poster.astro.com.my/prod/logo/SPOTV2.png" group-title="",824 SPOTV 2
#https://linearjitp-playback.astro.com.my/dash-wv/linear/5079/default_primary.mpd

#EXTINF:-1 tvg-id="SPOTV.id"  ch-number="823" tvg-logo="https://linear-poster.astro.com.my/prod/logo/SPOTV.png" group-title="",823 SPOTV
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36
#EXTVLCOPT:http-referrer=https://cignalplay.com/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=ec7ee27d83764e4b845c48cca31c8eef:9c0e4191203fccb0fde34ee29999129e
https://qp-pldt-live-grp-11-prod.akamaized.net/out/u/dr_spotvhd.mpd

#EXTINF:-1 tvg-id="SPOTV2.id"  ch-number="824" tvg-logo="https://linear-poster.astro.com.my/prod/logo/SPOTV2.png" group-title="",824 SPOTV 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36
#EXTVLCOPT:http-referrer=https://cignalplay.com/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=7eea72d6075245a99ee3255603d58853:6848ef60575579bf4d415db1032153ed
https://qp-pldt-live-grp-13-prod.akamaized.net/out/u/dr_spotv2hd.mpd


#EXTINF:-1 tvg-id="6116" ch-number="825" tvg-logo="https://linear-poster.astro.com.my/prod/logo/logo_1701_v3.png" group-title="",825 EuroSport
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=47c03f29f04747d2a298c0ad63f3b2c1:8b48b2cb2743b91d5f20cf2622067f3a
#EXTVLCOPT:http-user-agent=ExoPlayerDemo/2.15.1 (Linux; Android 13) ExoPlayerLib/2.15.1
https://kelontong.semar.my.id/fmx.mpd?id=eurosporthd&auth=eurosporthdsemar25
https://atemecdnbalancer-voe.sysln.id/live/eds/EUROSPORTHD/mpd/EUROSPORTHD.mpd

#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={010cbb9cf1a01ead38070730d38bc710:9cd5c0d1e54c22e035d88dd3c1dfc84c}
#EXTINF:-1 tvg-id="826.astro" ch-number="826"  tvg-logo="https://linear-poster.astro.com.my/prod/logo/W-Sport.png" group-title="",826 W-Sport
https://linearjitp-playback.astro.com.my/dash-wv/linear/5060/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"wx746KwRObmFrDZzACtwFA", "kid":"NLgxqXRQHRBvZUXp+T3gEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="818.astro" ch-number="828"   tvg-logo="https://linear-poster.astro.com.my/prod/logo/beINSPORT4.png" group-logo="" group-title="",828 beIN Sports 4  
https://linearjitp-playback.astro.com.my/dash-wv/linear/5085/default_primary.mpd


#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={ "keys":[ { "kty":"oct", "k":"Rj2HfDtqnFlIuQRatW1t0Q", "kid":"feQDGn4QebL/OI2hHbmnEA" } ], "type":"temporary" }
#EXTINF:-1 tvg-id="819.astro" ch-number="829"   tvg-logo="https://linear-poster.astro.com.my/prod/logo/beINSPORT5.png" group-logo="" group-title="",829 beIN Sports 5
https://linearjitp-playback.astro.com.my/dash-wv/linear/5086/default_primary.mpd



#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={705bab5e645b6d7c95588b29520f8110:28639bcfb5cbee8ff9ca398fcf5bfcd0}
#EXTINF:-1 tvg-id="831.astro"  ch-number="831" tvg-logo="https://linear-poster.astro.com.my/prod/logo/Golf_v1.png" group-title="",831 Golf Channel
https://linearjitp-playback.astro.com.my/dash-wv/linear/1003/default_primary.mpd



#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={03c2e0af2f8159f9f0ce9b5dbc865f10:cd84ed136b0cc71f8ab8cd4d4f6a2e4c}
#EXTINF:-1 tvg-id="832.astro" ch-number="832" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/197_144.png" group-title="",832 Astro Cricket
https://linearjitp-playback.astro.com.my/dash-wv/linear/2504/default_primary.mpd


 
#EXTHTTP:{"User-agent":"Mozilla/5.0 (Linux; Android 9; Shield TV Build/PKQ1.180904.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.157 Mobile Safari/537.36"}
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={9bfeb5068725617dbad6338473da6d10:06577ffcc4935ba24aff4c4c9dd6846d}
#EXTINF:-1 tvg-id="833.astro"  ch-number="833" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/393_144.png" group-title="",833 Premier Sports
https://linearjitp-playback.astro.com.my/dash-wv/linear/2601/default_primary.mpd

#EXTINF:-1 tvg-id="835.astro" ch-number="835" group-title="" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/197_144.png",835 Astro Cricket Plus
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=https://ck-server.danng.me/?username=HishamKamarul&channelid=5117/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 13; UltraBox Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/136.0.7103.61 Mobile Safari/537.36
https://linearjitp-playback.astro.com.my/dash-wv/linear/5117/default_primary.mpd


#EXTINF:-1 tvg-id="701.unifi" ch-number="840" tvg-logo="https://res.cloudinary.com/dcpdjee3i/image/upload/v1759312727/UnifiSports2023_jjnqa8.png" group-logo="" group-title="",840 Unifi Sports
https://unifi-live27.secureswiftcontent.com/UnifiHD/live11.mpd|user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36



