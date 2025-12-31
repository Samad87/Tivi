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


#EXTINF:-1 group-title="" group-logo="" tvg-logo="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Telegram_2019_Logo.svg/2048px-Telegram_2019_Logo.svg.png",



#EXTINF:-1 group-title="" group-logo="" tvg-logo="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Telegram_2019_Logo.svg/2048px-Telegram_2019_Logo.svg.png",t.me/ID0TT
https://static.vecteezy.com/system/resources/previews/007/525/658/mp4/stay-tuned-text-word-gold-light-animation-free-video.mp4


#EXTINF:-1 group-title="" group-logo="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMzJmMnB1djl6Mno1MG90bndsczZoNXN0NGx5NXZnbHNjaTM2cGhidSZlcD12MV9naWZzX3NlYXJjaCZjdD1n/mWnDeIKilkwDcrM2VT/giphy.gif" tvg-logo="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMzJmMnB1djl6Mno1MG90bndsczZoNXN0NGx5NXZnbHNjaTM2cGhidSZlcD12MV9naWZzX3NlYXJjaCZjdD1n/mWnDeIKilkwDcrM2VT/giphy.gif",LIVE EVENT
#EXTVLCOPT:http-referrer=https://xiaolin.live/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, seperti Gecko) Chrome/108.0.0.0 Safari/537.36
https://dl.dropboxusercontent.com/scl/fi/6fw9ub5kgp0t2bxr51r0a/event1.m3u8?rlkey=z4zpx72cdgho6mgcud7nvyokq&st=19kj6cae&dl=0p



#EXTINF:-1 tvg-logo="https://cdn.pixabay.com/animation/2023/03/24/18/16/18-16-28-807_512.gif" group-title="",UAI
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 10; MiTV-AXSO0 Build/QTZCS200912.005) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=hls
https://ytlive.cdnmts.org/direct?url=https://m.youtube.com/watch?v=TjrvFqhKabM&pp=uAQw




##############################################################################Astro####################################################################################

#EXTINF:-1 tvg-id="101.astro" ch-number="101" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/395_144.png"  group-logo="",101 TV1
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=912760c409eb5aff3e060422c502f410:bea2d0f89fb3fbafa1fc9f34ba8734a6
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 13; UltraBox Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/136.0.7103.61 Mobile Safari/537.36
https://linearjitp-playback.astro.com.my/dash-wv/linear/711/default_primary.mpd

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
#EXTINF:-1 tvg-id="309.astro"  ch-number="309" tvg-logo="https://linear-poster.astro.com.my/prod/logo/Celestial_HD_v1.<?php
if (
  ($_SERVER['HTTP_X_FROM'] ?? '') !== 'CF-WORKER' ||
  empty($_SERVER['HTTP_CF_CONNECTING_IP'])
) {
  http_response_code(403);
  exit("#EXTM3U\n# DIRECT ACCESS BLOCKED");
}




#EXTM3U
#EXTM3U url-tvg="https://raw.githubusercontent.com/azimabid00/epg/main/astro_epg.xml,https://raw.githubusercontent.com/azimabid00/epg/main/unifi_epg.xml,https://epg.pw/xmltv/epg_MY.xml,https://raw.githubusercontent.com/dbghelp/StarHub-TV-EPG/main/starhub.xml,https://epgshare01.online/epgshare01/epg_ripper_ID1.xml.gz,https://raw.githubusercontent.com/dbghelp/mewatch-EPG/refs/heads/main/mewatch.xml, https://raw.githubusercontent.com/dbghelp/Test-EPG/refs/heads/main/test_epg.xml,https://raw.githubusercontent.com/walpak1/epg/refs/heads/gh-pages/mana2.xml,https://raw.githubusercontent.com/dbghelp/Singtel-TV-EPG/refs/heads/main/singtel.xml,https://raw.githubusercontent.com/tv1973/xmltv_uk/refs/heads/master/epg.xml,https://raw.githubusercontent.com/AqFad2811/epg/refs/heads/main/indonesia.xml,https://raw.githubusercontent.com/walpak1/epg/refs/heads/gh-pages/sooka.xml,https://raw.githubusercontent.com/AqFad2811/epg/main/epg.xml,https://raw.githubusercontent.com/AqFad2811/epg/main/rtmklik.xml,https://raw.githubusercontent.com/walpak1/epg/refs/heads/gh-pages/singtel.xml,https://raw.githubusercontent.com/dbghelp/mewatch-EPG/refs/heads/main/mewatch.xml" refresh="1440"  " billed-msg=" FREE2026"


#EXTINF:-1 group-title="" group-logo="" tvg-logo="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Telegram_2019_Logo.svg/2048px-Telegram_2019_Logo.svg.png",



#EXTINF:-1 group-title="" group-logo="" tvg-logo="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Telegram_2019_Logo.svg/2048px-Telegram_2019_Logo.svg.png",t.me/ID0TT
https://static.vecteezy.com/system/resources/previews/007/525/658/mp4/stay-tuned-text-word-gold-light-animation-free-video.mp4


#EXTINF:-1 group-title="" group-logo="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMzJmMnB1djl6Mno1MG90bndsczZoNXN0NGx5NXZnbHNjaTM2cGhidSZlcD12MV9naWZzX3NlYXJjaCZjdD1n/mWnDeIKilkwDcrM2VT/giphy.gif" tvg-logo="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMzJmMnB1djl6Mno1MG90bndsczZoNXN0NGx5NXZnbHNjaTM2cGhidSZlcD12MV9naWZzX3NlYXJjaCZjdD1n/mWnDeIKilkwDcrM2VT/giphy.gif",LIVE EVENT
#EXTVLCOPT:http-referrer=https://xiaolin.live/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, seperti Gecko) Chrome/108.0.0.0 Safari/537.36
https://dl.dropboxusercontent.com/scl/fi/6fw9ub5kgp0t2bxr51r0a/event1.m3u8?rlkey=z4zpx72cdgho6mgcud7nvyokq&st=19kj6cae&dl=0p



#EXTINF:-1 tvg-logo="https://cdn.pixabay.com/animation/2023/03/24/18/16/18-16-28-807_512.gif" group-title="",UAI
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 10; MiTV-AXSO0 Build/QTZCS200912.005) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=hls
https://ytlive.cdnmts.org/direct?url=https://m.youtube.com/watch?v=TjrvFqhKabM&pp=uAQw




##############################################################################Astro####################################################################################

#EXTINF:-1 tvg-id="101.astro" ch-number="101" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/395_144.png"  group-logo="",101 TV1
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=912760c409eb5aff3e060422c502f410:bea2d0f89fb3fbafa1fc9f34ba8734a6
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 13; UltraBox Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/136.0.7103.61 Mobile Safari/537.36
https://linearjitp-playback.astro.com.my/dash-wv/linear/711/default_primary.mpd

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
#EXTINF:-1 tvg-id="309.astro"  ch-number="309" tvg-logo="https://linear-poster.astro.com.my/prod/logo/Celestial_HD_v1.<?php
if (
  ($_SERVER['HTTP_X_FROM'] ?? '') !== 'CF-WORKER' ||
  empty($_SERVER['HTTP_CF_CONNECTING_IP'])
) {
  http_response_code(403);
  exit("#EXTM3U\n# DIRECT ACCESS BLOCKED");
}




#EXTM3U
#EXTM3U url-tvg="https://raw.githubusercontent.com/azimabid00/epg/main/astro_epg.xml,https://raw.githubusercontent.com/azimabid00/epg/main/unifi_epg.xml,https://epg.pw/xmltv/epg_MY.xml,https://raw.githubusercontent.com/dbghelp/StarHub-TV-EPG/main/starhub.xml,https://epgshare01.online/epgshare01/epg_ripper_ID1.xml.gz,https://raw.githubusercontent.com/dbghelp/mewatch-EPG/refs/heads/main/mewatch.xml, https://raw.githubusercontent.com/dbghelp/Test-EPG/refs/heads/main/test_epg.xml,https://raw.githubusercontent.com/walpak1/epg/refs/heads/gh-pages/mana2.xml,https://raw.githubusercontent.com/dbghelp/Singtel-TV-EPG/refs/heads/main/singtel.xml,https://raw.githubusercontent.com/tv1973/xmltv_uk/refs/heads/master/epg.xml,https://raw.githubusercontent.com/AqFad2811/epg/refs/heads/main/indonesia.xml,https://raw.githubusercontent.com/walpak1/epg/refs/heads/gh-pages/sooka.xml,https://raw.githubusercontent.com/AqFad2811/epg/main/epg.xml,https://raw.githubusercontent.com/AqFad2811/epg/main/rtmklik.xml,https://raw.githubusercontent.com/walpak1/epg/refs/heads/gh-pages/singtel.xml,https://raw.githubusercontent.com/dbghelp/mewatch-EPG/refs/heads/main/mewatch.xml" refresh="1440"  " billed-msg=" FREE2026"


#EXTINF:-1 group-title="" group-logo="" tvg-logo="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Telegram_2019_Logo.svg/2048px-Telegram_2019_Logo.svg.png",



#EXTINF:-1 group-title="" group-logo="" tvg-logo="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Telegram_2019_Logo.svg/2048px-Telegram_2019_Logo.svg.png",t.me/ID0TT
https://static.vecteezy.com/system/resources/previews/007/525/658/mp4/stay-tuned-text-word-gold-light-animation-free-video.mp4


#EXTINF:-1 group-title="" group-logo="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMzJmMnB1djl6Mno1MG90bndsczZoNXN0NGx5NXZnbHNjaTM2cGhidSZlcD12MV9naWZzX3NlYXJjaCZjdD1n/mWnDeIKilkwDcrM2VT/giphy.gif" tvg-logo="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMzJmMnB1djl6Mno1MG90bndsczZoNXN0NGx5NXZnbHNjaTM2cGhidSZlcD12MV9naWZzX3NlYXJjaCZjdD1n/mWnDeIKilkwDcrM2VT/giphy.gif",LIVE EVENT
#EXTVLCOPT:http-referrer=https://xiaolin.live/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, seperti Gecko) Chrome/108.0.0.0 Safari/537.36
https://dl.dropboxusercontent.com/scl/fi/6fw9ub5kgp0t2bxr51r0a/event1.m3u8?rlkey=z4zpx72cdgho6mgcud7nvyokq&st=19kj6cae&dl=0p



#EXTINF:-1 tvg-logo="https://cdn.pixabay.com/animation/2023/03/24/18/16/18-16-28-807_512.gif" group-title="",UAI
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 10; MiTV-AXSO0 Build/QTZCS200912.005) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=hls
https://ytlive.cdnmts.org/direct?url=https://m.youtube.com/watch?v=TjrvFqhKabM&pp=uAQw




##############################################################################Astro####################################################################################

#EXTINF:-1 tvg-id="101.astro" ch-number="101" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/395_144.png"  group-logo="",101 TV1
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=912760c409eb5aff3e060422c502f410:bea2d0f89fb3fbafa1fc9f34ba8734a6
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 13; UltraBox Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/136.0.7103.61 Mobile Safari/537.36
https://linearjitp-playback.astro.com.my/dash-wv/linear/711/default_primary.mpd

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
#EXTINF:-1 tvg-id="309.astro"  ch-number="309" tvg-logo="https://linear-poster.astro.com.my/prod/logo/Celestial_HD_v1.
