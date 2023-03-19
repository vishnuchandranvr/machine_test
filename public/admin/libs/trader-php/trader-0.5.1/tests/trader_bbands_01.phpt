--TEST--
trader_bbands() basic test
--SKIPIF--
<?php
if (!extension_loaded("trader")) die("skip");
--INI--
trader.real_precision=3
--FILE--
<?php

include "inc/data.php";
include "inc/func.php";

$period = 14;

var_dump(trader_bbands(
	get_data("open", $data0),
	$period
));


--EXPECT--
array(3) {
  [0]=>
  array(239) {
    [13]=>
    float(-6.801655157581E+37)
    [14]=>
    float(-7.0629790428091E+37)
    [15]=>
    float(-6.9895986954515E+37)
    [16]=>
    float(-6.908187993391E+37)
    [17]=>
    float(-7.5477209105711E+37)
    [18]=>
    float(-7.9415745688528E+37)
    [19]=>
    float(-7.8533349214035E+37)
    [20]=>
    float(-7.9537188067673E+37)
    [21]=>
    float(-8.667728676426E+37)
    [22]=>
    float(-9.3686410270568E+37)
    [23]=>
    float(-1.0693489299235E+38)
    [24]=>
    float(-1.210060120365E+38)
    [25]=>
    float(-1.1891604760313E+38)
    [26]=>
    float(-1.0964397003855E+38)
    [27]=>
    float(-1.0825968566745E+38)
    [28]=>
    float(-1.050841565079E+38)
    [29]=>
    float(-9.9354789242418E+37)
    [30]=>
    float(-8.7156849286493E+37)
    [31]=>
    float(-8.3937287085443E+37)
    [32]=>
    float(-8.1004513054532E+37)
    [33]=>
    float(-6.5034341006897E+37)
    [34]=>
    float(-6.2349174748633E+37)
    [35]=>
    float(-6.3957531050371E+37)
    [36]=>
    float(-6.2573259513313E+37)
    [37]=>
    float(-6.2418758218583E+37)
    [38]=>
    float(-6.0021876114001E+37)
    [39]=>
    float(-5.6779418788494E+37)
    [40]=>
    float(-4.3387131897415E+37)
    [41]=>
    float(-4.2276101857472E+37)
    [42]=>
    float(-4.0200217026485E+37)
    [43]=>
    float(-4.5576633295463E+37)
    [44]=>
    float(-5.1370039236096E+37)
    [45]=>
    float(-5.9231280948935E+37)
    [46]=>
    float(-6.6866740382529E+37)
    [47]=>
    float(-7.21198205794E+37)
    [48]=>
    float(-7.2880953829639E+37)
    [49]=>
    float(-7.6661821645162E+37)
    [50]=>
    float(-7.5697777512978E+37)
    [51]=>
    float(-7.2006938441153E+37)
    [52]=>
    float(-6.4837252791006E+37)
    [53]=>
    float(-6.8307170493379E+37)
    [54]=>
    float(-7.1637967359078E+37)
    [55]=>
    float(-7.9161757348649E+37)
    [56]=>
    float(-8.0660646842032E+37)
    [57]=>
    float(-8.3217109470769E+37)
    [58]=>
    float(-8.196567575851E+37)
    [59]=>
    float(-7.8693457835581E+37)
    [60]=>
    float(-7.5893571761337E+37)
    [61]=>
    float(-7.0280069459735E+37)
    [62]=>
    float(-7.0104363983197E+37)
    [63]=>
    float(-7.2014842220188E+37)
    [64]=>
    float(-7.823315819278E+37)
    [65]=>
    float(-8.8081477528897E+37)
    [66]=>
    float(-9.5563873019722E+37)
    [67]=>
    float(-9.2692951609396E+37)
    [68]=>
    float(-8.3819358197695E+37)
    [69]=>
    float(-7.1202693210343E+37)
    [70]=>
    float(-6.3040890519964E+37)
    [71]=>
    float(-5.1244438224813E+37)
    [72]=>
    float(-6.0637511122243E+37)
    [73]=>
    float(-7.9798020537045E+37)
    [74]=>
    float(-8.910851652247E+37)
    [75]=>
    float(-1.1229403441774E+38)
    [76]=>
    float(-1.2209486134073E+38)
    [77]=>
    float(-1.5117263972872E+38)
    [78]=>
    float(-1.8762487994394E+38)
    [79]=>
    float(-2.0930799393842E+38)
    [80]=>
    float(-2.2044126169956E+38)
    [81]=>
    float(-2.3247920767791E+38)
    [82]=>
    float(-2.4068802392245E+38)
    [83]=>
    float(-2.4963080466001E+38)
    [84]=>
    float(-2.5113953221836E+38)
    [85]=>
    float(-2.4490657944012E+38)
    [86]=>
    float(-2.1950111550202E+38)
    [87]=>
    float(-1.7314562586187E+38)
    [88]=>
    float(-1.0298818494003E+38)
    [89]=>
    float(-1.0119719995167E+38)
    [90]=>
    float(-1.1174336218473E+38)
    [91]=>
    float(-1.4966421037558E+38)
    [92]=>
    float(-1.669560260753E+38)
    [93]=>
    float(-1.802565302109E+38)
    [94]=>
    float(-1.8204437789439E+38)
    [95]=>
    float(-1.7936522639233E+38)
    [96]=>
    float(-1.6873081013337E+38)
    [97]=>
    float(-1.593948081328E+38)
    [98]=>
    float(-1.4828236680779E+38)
    [99]=>
    float(-1.3450534888082E+38)
    [100]=>
    float(-1.1384763095461E+38)
    [101]=>
    float(-1.0006251030922E+38)
    [102]=>
    float(-9.1297459002998E+37)
    [103]=>
    float(-8.7190582730203E+37)
    [104]=>
    float(-8.7449129016881E+37)
    [105]=>
    float(-7.8600178912E+37)
    [106]=>
    float(-7.8867487432892E+37)
    [107]=>
    float(-8.1339642229108E+37)
    [108]=>
    float(-7.6075956354209E+37)
    [109]=>
    float(-7.3225868421814E+37)
    [110]=>
    float(-7.2421373004553E+37)
    [111]=>
    float(-7.2744000383844E+37)
    [112]=>
    float(-6.7728351839265E+37)
    [113]=>
    float(-6.7018130352389E+37)
    [114]=>
    float(-7.1314569024243E+37)
    [115]=>
    float(-7.7433858873309E+37)
    [116]=>
    float(-8.7252543381491E+37)
    [117]=>
    float(-8.8682344146264E+37)
    [118]=>
    float(-8.8954676891259E+37)
    [119]=>
    float(-8.4735337362708E+37)
    [120]=>
    float(-8.9411432634353E+37)
    [121]=>
    float(-9.5464583934164E+37)
    [122]=>
    float(-9.376156826589E+37)
    [123]=>
    float(-9.1213847465144E+37)
    [124]=>
    float(-1.0050310915083E+38)
    [125]=>
    float(-1.0703550622031E+38)
    [126]=>
    float(-1.1780634229835E+38)
    [127]=>
    float(-1.2232054931905E+38)
    [128]=>
    float(-1.2457535708091E+38)
    [129]=>
    float(-1.2864480227767E+38)
    [130]=>
    float(-1.4652714869989E+38)
    [131]=>
    float(-1.5333817368874E+38)
    [132]=>
    float(-1.5869358808079E+38)
    [133]=>
    float(-1.5859883739953E+38)
    [134]=>
    float(-1.4915847362819E+38)
    [135]=>
    float(-1.3657540807857E+38)
    [136]=>
    float(-1.0951477046028E+38)
    [137]=>
    float(-9.6920090164738E+37)
    [138]=>
    float(-1.0433032509623E+38)
    [139]=>
    float(-1.2694550494005E+38)
    [140]=>
    float(-1.4668152506676E+38)
    [141]=>
    float(-1.5748223223394E+38)
    [142]=>
    float(-1.6335420526435E+38)
    [143]=>
    float(-1.6698783470292E+38)
    [144]=>
    float(-1.6228248613489E+38)
    [145]=>
    float(-1.6198798283091E+38)
    [146]=>
    float(-1.5116876651406E+38)
    [147]=>
    float(-1.4035529279042E+38)
    [148]=>
    float(-1.2629698418523E+38)
    [149]=>
    float(-9.2737888532077E+37)
    [150]=>
    float(-7.0874911726534E+37)
    [151]=>
    float(-6.7965838132567E+37)
    [152]=>
    float(-6.5246143446923E+37)
    [153]=>
    float(-6.5083986556786E+37)
    [154]=>
    float(-6.5077541268469E+37)
    [155]=>
    float(-6.5077541268469E+37)
    [156]=>
    float(-7.3407830589338E+37)
    [157]=>
    float(-8.0422661861019E+37)
    [158]=>
    float(-7.7852946151621E+37)
    [159]=>
    float(-7.811797103073E+37)
    [160]=>
    float(-7.811797103073E+37)
    [161]=>
    float(-7.3060405536388E+37)
    [162]=>
    float(-6.8253925655204E+37)
    [163]=>
    float(-6.7416656029539E+37)
    [164]=>
    float(-6.8076085884765E+37)
    [165]=>
    float(-6.5214071741171E+37)
    [166]=>
    float(-5.641330173146E+37)
    [167]=>
    float(-5.6969931650359E+37)
    [168]=>
    float(-5.6977487498438E+37)
    [169]=>
    float(-6.3513302479393E+37)
    [170]=>
    float(-6.4912473251834E+37)
    [171]=>
    float(-7.8359817638955E+37)
    [172]=>
    float(-9.5165395496463E+37)
    [173]=>
    float(-1.2970627728581E+38)
    [174]=>
    float(-1.3805117950695E+38)
    [175]=>
    float(-1.3694302572937E+38)
    [176]=>
    float(-1.3296203405481E+38)
    [177]=>
    float(-1.228250890494E+38)
    [178]=>
    float(-1.1654413743031E+38)
    [179]=>
    float(-1.1022166441365E+38)
    [180]=>
    float(-9.9457625065463E+37)
    [181]=>
    float(-9.4913761340612E+37)
    [182]=>
    float(-9.2253862537255E+37)
    [183]=>
    float(-1.2156689957145E+38)
    [184]=>
    float(-1.2453549961058E+38)
    [185]=>
    float(-1.3558504692248E+38)
    [186]=>
    float(-1.4479394807088E+38)
    [187]=>
    float(-1.3720668771257E+38)
    [188]=>
    float(-1.3299331730946E+38)
    [189]=>
    float(-1.4074320950015E+38)
    [190]=>
    float(-1.2476295074078E+38)
    [191]=>
    float(-1.1064172391745E+38)
    [192]=>
    float(-9.888418318251E+37)
    [193]=>
    float(-1.1342920137464E+38)
    [194]=>
    float(-1.1980327752663E+38)
    [195]=>
    float(-1.2171666433792E+38)
    [196]=>
    float(-1.2727839805815E+38)
    [197]=>
    float(-1.5989842056118E+38)
    [198]=>
    float(-1.6745630499218E+38)
    [199]=>
    float(-1.7159242704854E+38)
    [200]=>
    float(-1.7507533655368E+38)
    [201]=>
    float(-1.7215795369487E+38)
    [202]=>
    float(-2.2421307695482E+38)
    [203]=>
    float(-2.5657498814345E+38)
    [204]=>
    float(-2.6264406891985E+38)
    [205]=>
    float(-2.5224701814544E+38)
    [206]=>
    float(-2.393219989547E+38)
    [207]=>
    float(-2.3314163996531E+38)
    [208]=>
    float(-2.194100131661E+38)
    [209]=>
    float(-1.9501973683476E+38)
    [210]=>
    float(-1.772578267464E+38)
    [211]=>
    float(-1.6959530055219E+38)
    [212]=>
    float(-1.6020215115501E+38)
    [213]=>
    float(-1.412343666624E+38)
    [214]=>
    float(-1.2166627322646E+38)
    [215]=>
    float(-5.7584532361981E+37)
    [216]=>
    float(-5.571865367493E+37)
    [217]=>
    float(-5.8290775778125E+37)
    [218]=>
    float(-5.8120274659792E+37)
    [219]=>
    float(-5.8268730456203E+37)
    [220]=>
    float(-5.8525445800286E+37)
    [221]=>
    float(-5.8272193809993E+37)
    [222]=>
    float(-5.7313990171606E+37)
    [223]=>
    float(-5.931290770489E+37)
    [224]=>
    float(-9.948857410553E+37)
    [225]=>
    float(-1.4165326469221E+38)
    [226]=>
    float(-1.5383920060524E+38)
    [227]=>
    float(-1.6152324404664E+38)
    [228]=>
    float(-1.5457587001805E+38)
    [229]=>
    float(-1.5330808267761E+38)
    [230]=>
    float(-1.4744064475065E+38)
    [231]=>
    float(-1.4654626507053E+38)
    [232]=>
    float(-1.5471137116369E+38)
    [233]=>
    float(-1.6746567177929E+38)
    [234]=>
    float(-1.8214513612019E+38)
    [235]=>
    float(-1.8192401811565E+38)
    [236]=>
    float(-1.8146191032267E+38)
    [237]=>
    float(-1.6563122487339E+38)
    [238]=>
    float(-1.6314073428691E+38)
    [239]=>
    float(-1.6320403468901E+38)
    [240]=>
    float(-1.5974874101256E+38)
    [241]=>
    float(-1.5746696009133E+38)
    [242]=>
    float(-1.5229566571611E+38)
    [243]=>
    float(-1.4293195273361E+38)
    [244]=>
    float(-1.2813220153977E+38)
    [245]=>
    float(-1.1242807496715E+38)
    [246]=>
    float(-1.1320054738636E+38)
    [247]=>
    float(-1.1309106769252E+38)
    [248]=>
    float(-1.0254600261864E+38)
    [249]=>
    float(-9.1312161661767E+37)
    [250]=>
    float(-3.2074155149745E+37)
    [251]=>
    float(-2.6519196935811E+37)
  }
  [1]=>
  array(239) {
    [13]=>
    float(93.911)
    [14]=>
    float(93.813)
    [15]=>
    float(93.84)
    [16]=>
    float(93.715)
    [17]=>
    float(93.413)
    [18]=>
    float(92.974)
    [19]=>
    float(92.813)
    [20]=>
    float(92.44)
    [21]=>
    float(92.186)
    [22]=>
    float(91.884)
    [23]=>
    float(91.462)
    [24]=>
    float(90.721)
    [25]=>
    float(89.721)
    [26]=>
    float(88.467)
    [27]=>
    float(87.976)
    [28]=>
    float(87.761)
    [29]=>
    float(87.449)
    [30]=>
    float(86.866)
    [31]=>
    float(86.599)
    [32]=>
    float(86.445)
    [33]=>
    float(86.007)
    [34]=>
    float(85.951)
    [35]=>
    float(86)
    [36]=>
    float(85.886)
    [37]=>
    float(85.906)
    [38]=>
    float(85.996)
    [39]=>
    float(86.121)
    [40]=>
    float(86.335)
    [41]=>
    float(86.451)
    [42]=>
    float(86.366)
    [43]=>
    float(86.496)
    [44]=>
    float(86.831)
    [45]=>
    float(87.175)
    [46]=>
    float(87.461)
    [47]=>
    float(87.834)
    [48]=>
    float(87.876)
    [49]=>
    float(88.046)
    [50]=>
    float(88.314)
    [51]=>
    float(88.546)
    [52]=>
    float(88.8)
    [53]=>
    float(88.736)
    [54]=>
    float(88.682)
    [55]=>
    float(88.486)
    [56]=>
    float(88.419)
    [57]=>
    float(88.148)
    [58]=>
    float(87.974)
    [59]=>
    float(87.809)
    [60]=>
    float(87.724)
    [61]=>
    float(87.531)
    [62]=>
    float(87.525)
    [63]=>
    float(87.565)
    [64]=>
    float(87.726)
    [65]=>
    float(88.029)
    [66]=>
    float(88.351)
    [67]=>
    float(88.88)
    [68]=>
    float(89.487)
    [69]=>
    float(90.014)
    [70]=>
    float(90.281)
    [71]=>
    float(90.511)
    [72]=>
    float(90.364)
    [73]=>
    float(90.007)
    [74]=>
    float(89.641)
    [75]=>
    float(90.353)
    [76]=>
    float(90.867)
    [77]=>
    float(91.639)
    [78]=>
    float(92.639)
    [79]=>
    float(93.469)
    [80]=>
    float(94.161)
    [81]=>
    float(95.054)
    [82]=>
    float(95.911)
    [83]=>
    float(96.965)
    [84]=>
    float(98.13)
    [85]=>
    float(99.358)
    [86]=>
    float(100.8)
    [87]=>
    float(102.594)
    [88]=>
    float(104.407)
    [89]=>
    float(105.26)
    [90]=>
    float(106.71)
    [91]=>
    float(108.023)
    [92]=>
    float(108.88)
    [93]=>
    float(109.916)
    [94]=>
    float(111.103)
    [95]=>
    float(112.072)
    [96]=>
    float(112.956)
    [97]=>
    float(113.601)
    [98]=>
    float(113.971)
    [99]=>
    float(114.369)
    [100]=>
    float(115.159)
    [101]=>
    float(115.686)
    [102]=>
    float(115.926)
    [103]=>
    float(116.011)
    [104]=>
    float(115.837)
    [105]=>
    float(115.327)
    [106]=>
    float(115.336)
    [107]=>
    float(115.389)
    [108]=>
    float(115.21)
    [109]=>
    float(115.071)
    [110]=>
    float(114.977)
    [111]=>
    float(115.029)
    [112]=>
    float(115.475)
    [113]=>
    float(116.073)
    [114]=>
    float(116.256)
    [115]=>
    float(116.555)
    [116]=>
    float(117.216)
    [117]=>
    float(118.081)
    [118]=>
    float(118.631)
    [119]=>
    float(119.309)
    [120]=>
    float(119.68)
    [121]=>
    float(119.975)
    [122]=>
    float(120.431)
    [123]=>
    float(121.069)
    [124]=>
    float(122.136)
    [125]=>
    float(123.209)
    [126]=>
    float(124.28)
    [127]=>
    float(125.075)
    [128]=>
    float(126.021)
    [129]=>
    float(127.008)
    [130]=>
    float(128.049)
    [131]=>
    float(128.897)
    [132]=>
    float(130.044)
    [133]=>
    float(131.107)
    [134]=>
    float(132.041)
    [135]=>
    float(132.934)
    [136]=>
    float(133.576)
    [137]=>
    float(133.769)
    [138]=>
    float(133.599)
    [139]=>
    float(133.107)
    [140]=>
    float(132.473)
    [141]=>
    float(132.044)
    [142]=>
    float(131.606)
    [143]=>
    float(131.053)
    [144]=>
    float(130.231)
    [145]=>
    float(129.392)
    [146]=>
    float(128.281)
    [147]=>
    float(126.995)
    [148]=>
    float(125.825)
    [149]=>
    float(124.789)
    [150]=>
    float(124.191)
    [151]=>
    float(123.762)
    [152]=>
    float(123.226)
    [153]=>
    float(123.209)
    [154]=>
    float(123.146)
    [155]=>
    float(123.146)
    [156]=>
    float(123.299)
    [157]=>
    float(123.451)
    [158]=>
    float(123.303)
    [159]=>
    float(123.329)
    [160]=>
    float(123.329)
    [161]=>
    float(123.57)
    [162]=>
    float(123.713)
    [163]=>
    float(123.757)
    [164]=>
    float(123.856)
    [165]=>
    float(124.052)
    [166]=>
    float(124.356)
    [167]=>
    float(124.489)
    [168]=>
    float(124.757)
    [169]=>
    float(124.999)
    [170]=>
    float(125.026)
    [171]=>
    float(125.249)
    [172]=>
    float(125.865)
    [173]=>
    float(126.803)
    [174]=>
    float(127.651)
    [175]=>
    float(128.268)
    [176]=>
    float(129.125)
    [177]=>
    float(129.795)
    [178]=>
    float(130.251)
    [179]=>
    float(130.411)
    [180]=>
    float(130.724)
    [181]=>
    float(130.836)
    [182]=>
    float(130.908)
    [183]=>
    float(130.345)
    [184]=>
    float(130.184)
    [185]=>
    float(129.576)
    [186]=>
    float(128.831)
    [187]=>
    float(127.652)
    [188]=>
    float(126.679)
    [189]=>
    float(125.679)
    [190]=>
    float(124.821)
    [191]=>
    float(124.125)
    [192]=>
    float(123.249)
    [193]=>
    float(122.428)
    [194]=>
    float(121.339)
    [195]=>
    float(120.396)
    [196]=>
    float(119.204)
    [197]=>
    float(118.204)
    [198]=>
    float(116.763)
    [199]=>
    float(115.691)
    [200]=>
    float(114.616)
    [201]=>
    float(113.731)
    [202]=>
    float(111.731)
    [203]=>
    float(109.999)
    [204]=>
    float(108.017)
    [205]=>
    float(106.061)
    [206]=>
    float(104.374)
    [207]=>
    float(102.91)
    [208]=>
    float(101.731)
    [209]=>
    float(100.624)
    [210]=>
    float(99.62)
    [211]=>
    float(98.861)
    [212]=>
    float(98.004)
    [213]=>
    float(96.914)
    [214]=>
    float(95.736)
    [215]=>
    float(94.767)
    [216]=>
    float(94.883)
    [217]=>
    float(95.151)
    [218]=>
    float(95.276)
    [219]=>
    float(95.356)
    [220]=>
    float(95.294)
    [221]=>
    float(95.32)
    [222]=>
    float(95.106)
    [223]=>
    float(95.141)
    [224]=>
    float(95.766)
    [225]=>
    float(96.691)
    [226]=>
    float(97.445)
    [227]=>
    float(98.387)
    [228]=>
    float(99.419)
    [229]=>
    float(100.035)
    [230]=>
    float(100.602)
    [231]=>
    float(101.026)
    [232]=>
    float(102.013)
    [233]=>
    float(103.227)
    [234]=>
    float(104.826)
    [235]=>
    float(106.353)
    [236]=>
    float(108.246)
    [237]=>
    float(109.147)
    [238]=>
    float(109.334)
    [239]=>
    float(109.433)
    [240]=>
    float(109.629)
    [241]=>
    float(109.776)
    [242]=>
    float(110.187)
    [243]=>
    float(110.571)
    [244]=>
    float(110.995)
    [245]=>
    float(111.454)
    [246]=>
    float(111.405)
    [247]=>
    float(111.169)
    [248]=>
    float(110.637)
    [249]=>
    float(110.222)
    [250]=>
    float(109.45)
    [251]=>
    float(109.276)
  }
  [2]=>
  array(239) {
    [13]=>
    float(6.801655157581E+37)
    [14]=>
    float(7.0629790428091E+37)
    [15]=>
    float(6.9895986954515E+37)
    [16]=>
    float(6.908187993391E+37)
    [17]=>
    float(7.5477209105711E+37)
    [18]=>
    float(7.9415745688528E+37)
    [19]=>
    float(7.8533349214035E+37)
    [20]=>
    float(7.9537188067673E+37)
    [21]=>
    float(8.667728676426E+37)
    [22]=>
    float(9.3686410270568E+37)
    [23]=>
    float(1.0693489299235E+38)
    [24]=>
    float(1.210060120365E+38)
    [25]=>
    float(1.1891604760313E+38)
    [26]=>
    float(1.0964397003855E+38)
    [27]=>
    float(1.0825968566745E+38)
    [28]=>
    float(1.050841565079E+38)
    [29]=>
    float(9.9354789242418E+37)
    [30]=>
    float(8.7156849286493E+37)
    [31]=>
    float(8.3937287085443E+37)
    [32]=>
    float(8.1004513054532E+37)
    [33]=>
    float(6.5034341006897E+37)
    [34]=>
    float(6.2349174748633E+37)
    [35]=>
    float(6.3957531050371E+37)
    [36]=>
    float(6.2573259513313E+37)
    [37]=>
    float(6.2418758218583E+37)
    [38]=>
    float(6.0021876114001E+37)
    [39]=>
    float(5.6779418788494E+37)
    [40]=>
    float(4.3387131897415E+37)
    [41]=>
    float(4.2276101857472E+37)
    [42]=>
    float(4.0200217026485E+37)
    [43]=>
    float(4.5576633295463E+37)
    [44]=>
    float(5.1370039236096E+37)
    [45]=>
    float(5.9231280948935E+37)
    [46]=>
    float(6.6866740382529E+37)
    [47]=>
    float(7.21198205794E+37)
    [48]=>
    float(7.2880953829639E+37)
    [49]=>
    float(7.6661821645162E+37)
    [50]=>
    float(7.5697777512978E+37)
    [51]=>
    float(7.2006938441153E+37)
    [52]=>
    float(6.4837252791006E+37)
    [53]=>
    float(6.8307170493379E+37)
    [54]=>
    float(7.1637967359078E+37)
    [55]=>
    float(7.9161757348649E+37)
    [56]=>
    float(8.0660646842032E+37)
    [57]=>
    float(8.3217109470769E+37)
    [58]=>
    float(8.196567575851E+37)
    [59]=>
    float(7.8693457835581E+37)
    [60]=>
    float(7.5893571761337E+37)
    [61]=>
    float(7.0280069459735E+37)
    [62]=>
    float(7.0104363983197E+37)
    [63]=>
    float(7.2014842220188E+37)
    [64]=>
    float(7.823315819278E+37)
    [65]=>
    float(8.8081477528897E+37)
    [66]=>
    float(9.5563873019722E+37)
    [67]=>
    float(9.2692951609396E+37)
    [68]=>
    float(8.3819358197695E+37)
    [69]=>
    float(7.1202693210343E+37)
    [70]=>
    float(6.3040890519964E+37)
    [71]=>
    float(5.1244438224813E+37)
    [72]=>
    float(6.0637511122243E+37)
    [73]=>
    float(7.9798020537045E+37)
    [74]=>
    float(8.910851652247E+37)
    [75]=>
    float(1.1229403441774E+38)
    [76]=>
    float(1.2209486134073E+38)
    [77]=>
    float(1.5117263972872E+38)
    [78]=>
    float(1.8762487994394E+38)
    [79]=>
    float(2.0930799393842E+38)
    [80]=>
    float(2.2044126169956E+38)
    [81]=>
    float(2.3247920767791E+38)
    [82]=>
    float(2.4068802392245E+38)
    [83]=>
    float(2.4963080466001E+38)
    [84]=>
    float(2.5113953221836E+38)
    [85]=>
    float(2.4490657944012E+38)
    [86]=>
    float(2.1950111550202E+38)
    [87]=>
    float(1.7314562586187E+38)
    [88]=>
    float(1.0298818494003E+38)
    [89]=>
    float(1.0119719995167E+38)
    [90]=>
    float(1.1174336218473E+38)
    [91]=>
    float(1.4966421037558E+38)
    [92]=>
    float(1.669560260753E+38)
    [93]=>
    float(1.802565302109E+38)
    [94]=>
    float(1.8204437789439E+38)
    [95]=>
    float(1.7936522639233E+38)
    [96]=>
    float(1.6873081013337E+38)
    [97]=>
    float(1.593948081328E+38)
    [98]=>
    float(1.4828236680779E+38)
    [99]=>
    float(1.3450534888082E+38)
    [100]=>
    float(1.1384763095461E+38)
    [101]=>
    float(1.0006251030922E+38)
    [102]=>
    float(9.1297459002998E+37)
    [103]=>
    float(8.7190582730203E+37)
    [104]=>
    float(8.7449129016881E+37)
    [105]=>
    float(7.8600178912E+37)
    [106]=>
    float(7.8867487432892E+37)
    [107]=>
    float(8.1339642229108E+37)
    [108]=>
    float(7.6075956354209E+37)
    [109]=>
    float(7.3225868421814E+37)
    [110]=>
    float(7.2421373004553E+37)
    [111]=>
    float(7.2744000383844E+37)
    [112]=>
    float(6.7728351839265E+37)
    [113]=>
    float(6.7018130352389E+37)
    [114]=>
    float(7.1314569024243E+37)
    [115]=>
    float(7.7433858873309E+37)
    [116]=>
    float(8.7252543381491E+37)
    [117]=>
    float(8.8682344146264E+37)
    [118]=>
    float(8.8954676891259E+37)
    [119]=>
    float(8.4735337362708E+37)
    [120]=>
    float(8.9411432634353E+37)
    [121]=>
    float(9.5464583934164E+37)
    [122]=>
    float(9.376156826589E+37)
    [123]=>
    float(9.1213847465144E+37)
    [124]=>
    float(1.0050310915083E+38)
    [125]=>
    float(1.0703550622031E+38)
    [126]=>
    float(1.1780634229835E+38)
    [127]=>
    float(1.2232054931905E+38)
    [128]=>
    float(1.2457535708091E+38)
    [129]=>
    float(1.2864480227767E+38)
    [130]=>
    float(1.4652714869989E+38)
    [131]=>
    float(1.5333817368874E+38)
    [132]=>
    float(1.5869358808079E+38)
    [133]=>
    float(1.5859883739953E+38)
    [134]=>
    float(1.4915847362819E+38)
    [135]=>
    float(1.3657540807857E+38)
    [136]=>
    float(1.0951477046028E+38)
    [137]=>
    float(9.6920090164738E+37)
    [138]=>
    float(1.0433032509623E+38)
    [139]=>
    float(1.2694550494005E+38)
    [140]=>
    float(1.4668152506676E+38)
    [141]=>
    float(1.5748223223394E+38)
    [142]=>
    float(1.6335420526435E+38)
    [143]=>
    float(1.6698783470292E+38)
    [144]=>
    float(1.6228248613489E+38)
    [145]=>
    float(1.6198798283091E+38)
    [146]=>
    float(1.5116876651406E+38)
    [147]=>
    float(1.4035529279042E+38)
    [148]=>
    float(1.2629698418523E+38)
    [149]=>
    float(9.2737888532077E+37)
    [150]=>
    float(7.0874911726534E+37)
    [151]=>
    float(6.7965838132567E+37)
    [152]=>
    float(6.5246143446923E+37)
    [153]=>
    float(6.5083986556786E+37)
    [154]=>
    float(6.5077541268469E+37)
    [155]=>
    float(6.5077541268469E+37)
    [156]=>
    float(7.3407830589338E+37)
    [157]=>
    float(8.0422661861019E+37)
    [158]=>
    float(7.7852946151621E+37)
    [159]=>
    float(7.811797103073E+37)
    [160]=>
    float(7.811797103073E+37)
    [161]=>
    float(7.3060405536388E+37)
    [162]=>
    float(6.8253925655204E+37)
    [163]=>
    float(6.7416656029539E+37)
    [164]=>
    float(6.8076085884765E+37)
    [165]=>
    float(6.5214071741171E+37)
    [166]=>
    float(5.641330173146E+37)
    [167]=>
    float(5.6969931650359E+37)
    [168]=>
    float(5.6977487498438E+37)
    [169]=>
    float(6.3513302479393E+37)
    [170]=>
    float(6.4912473251834E+37)
    [171]=>
    float(7.8359817638955E+37)
    [172]=>
    float(9.5165395496463E+37)
    [173]=>
    float(1.2970627728581E+38)
    [174]=>
    float(1.3805117950695E+38)
    [175]=>
    float(1.3694302572937E+38)
    [176]=>
    float(1.3296203405481E+38)
    [177]=>
    float(1.228250890494E+38)
    [178]=>
    float(1.1654413743031E+38)
    [179]=>
    float(1.1022166441365E+38)
    [180]=>
    float(9.9457625065463E+37)
    [181]=>
    float(9.4913761340612E+37)
    [182]=>
    float(9.2253862537255E+37)
    [183]=>
    float(1.2156689957145E+38)
    [184]=>
    float(1.2453549961058E+38)
    [185]=>
    float(1.3558504692248E+38)
    [186]=>
    float(1.4479394807088E+38)
    [187]=>
    float(1.3720668771257E+38)
    [188]=>
    float(1.3299331730946E+38)
    [189]=>
    float(1.4074320950015E+38)
    [190]=>
    float(1.2476295074078E+38)
    [191]=>
    float(1.1064172391745E+38)
    [192]=>
    float(9.888418318251E+37)
    [193]=>
    float(1.1342920137464E+38)
    [194]=>
    float(1.1980327752663E+38)
    [195]=>
    float(1.2171666433792E+38)
    [196]=>
    float(1.2727839805815E+38)
    [197]=>
    float(1.5989842056118E+38)
    [198]=>
    float(1.6745630499218E+38)
    [199]=>
    float(1.7159242704854E+38)
    [200]=>
    float(1.7507533655368E+38)
    [201]=>
    float(1.7215795369487E+38)
    [202]=>
    float(2.2421307695482E+38)
    [203]=>
    float(2.5657498814345E+38)
    [204]=>
    float(2.6264406891985E+38)
    [205]=>
    float(2.5224701814544E+38)
    [206]=>
    float(2.393219989547E+38)
    [207]=>
    float(2.3314163996531E+38)
    [208]=>
    float(2.194100131661E+38)
    [209]=>
    float(1.9501973683476E+38)
    [210]=>
    float(1.772578267464E+38)
    [211]=>
    float(1.6959530055219E+38)
    [212]=>
    float(1.6020215115501E+38)
    [213]=>
    float(1.412343666624E+38)
    [214]=>
    float(1.2166627322646E+38)
    [215]=>
    float(5.7584532361981E+37)
    [216]=>
    float(5.571865367493E+37)
    [217]=>
    float(5.8290775778125E+37)
    [218]=>
    float(5.8120274659792E+37)
    [219]=>
    float(5.8268730456203E+37)
    [220]=>
    float(5.8525445800286E+37)
    [221]=>
    float(5.8272193809993E+37)
    [222]=>
    float(5.7313990171606E+37)
    [223]=>
    float(5.931290770489E+37)
    [224]=>
    float(9.948857410553E+37)
    [225]=>
    float(1.4165326469221E+38)
    [226]=>
    float(1.5383920060524E+38)
    [227]=>
    float(1.6152324404664E+38)
    [228]=>
    float(1.5457587001805E+38)
    [229]=>
    float(1.5330808267761E+38)
    [230]=>
    float(1.4744064475065E+38)
    [231]=>
    float(1.4654626507053E+38)
    [232]=>
    float(1.5471137116369E+38)
    [233]=>
    float(1.6746567177929E+38)
    [234]=>
    float(1.8214513612019E+38)
    [235]=>
    float(1.8192401811565E+38)
    [236]=>
    float(1.8146191032267E+38)
    [237]=>
    float(1.6563122487339E+38)
    [238]=>
    float(1.6314073428691E+38)
    [239]=>
    float(1.6320403468901E+38)
    [240]=>
    float(1.5974874101256E+38)
    [241]=>
    float(1.5746696009133E+38)
    [242]=>
    float(1.5229566571611E+38)
    [243]=>
    float(1.4293195273361E+38)
    [244]=>
    float(1.2813220153977E+38)
    [245]=>
    float(1.1242807496715E+38)
    [246]=>
    float(1.1320054738636E+38)
    [247]=>
    float(1.1309106769252E+38)
    [248]=>
    float(1.0254600261864E+38)
    [249]=>
    float(9.1312161661767E+37)
    [250]=>
    float(3.2074155149745E+37)
    [251]=>
    float(2.6519196935811E+37)
  }
}