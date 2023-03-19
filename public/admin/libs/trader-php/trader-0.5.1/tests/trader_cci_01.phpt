--TEST--
trader_cci() basic test
--SKIPIF--
<?php
if (!extension_loaded("trader")) die("skip");
--FILE--
<?php

include "inc/data.php";
include "inc/func.php";

var_dump(trader_cci(
	get_data("high", $data0),
	get_data("low", $data0),
	get_data("close", $data0),
	14
));


--EXPECT--
array(239) {
  [13]=>
  float(-123.064)
  [14]=>
  float(-134.414)
  [15]=>
  float(-39.174)
  [16]=>
  float(-86.058)
  [17]=>
  float(-98.713)
  [18]=>
  float(-51.034)
  [19]=>
  float(-55.28)
  [20]=>
  float(-102.462)
  [21]=>
  float(-117.74)
  [22]=>
  float(-140.389)
  [23]=>
  float(-165.807)
  [24]=>
  float(-148.807)
  [25]=>
  float(-140.035)
  [26]=>
  float(-98.977)
  [27]=>
  float(0.217)
  [28]=>
  float(-15.982)
  [29]=>
  float(3.807)
  [30]=>
  float(-30.266)
  [31]=>
  float(2.666)
  [32]=>
  float(5.983)
  [33]=>
  float(80.838)
  [34]=>
  float(120.219)
  [35]=>
  float(76.908)
  [36]=>
  float(9.769)
  [37]=>
  float(-56.263)
  [38]=>
  float(-99.314)
  [39]=>
  float(-97.769)
  [40]=>
  float(-139.934)
  [41]=>
  float(14.426)
  [42]=>
  float(114.827)
  [43]=>
  float(131.813)
  [44]=>
  float(154.907)
  [45]=>
  float(119.61)
  [46]=>
  float(124.476)
  [47]=>
  float(63.649)
  [48]=>
  float(67.486)
  [49]=>
  float(70.931)
  [50]=>
  float(30.594)
  [51]=>
  float(-9.902)
  [52]=>
  float(-87.459)
  [53]=>
  float(-140.493)
  [54]=>
  float(-171.627)
  [55]=>
  float(-110.256)
  [56]=>
  float(-63.535)
  [57]=>
  float(-36.948)
  [58]=>
  float(20.257)
  [59]=>
  float(49.947)
  [60]=>
  float(51.573)
  [61]=>
  float(27.263)
  [62]=>
  float(111.457)
  [63]=>
  float(132.287)
  [64]=>
  float(122.917)
  [65]=>
  float(118.143)
  [66]=>
  float(105.457)
  [67]=>
  float(57.1)
  [68]=>
  float(29.864)
  [69]=>
  float(3.016)
  [70]=>
  float(-74.027)
  [71]=>
  float(-159.738)
  [72]=>
  float(-202.294)
  [73]=>
  float(-155.91)
  [74]=>
  float(-103.557)
  [75]=>
  float(163.863)
  [76]=>
  float(170.431)
  [77]=>
  float(185.256)
  [78]=>
  float(161.89)
  [79]=>
  float(104.399)
  [80]=>
  float(83.746)
  [81]=>
  float(79.204)
  [82]=>
  float(77.477)
  [83]=>
  float(79.002)
  [84]=>
  float(62.682)
  [85]=>
  float(56.699)
  [86]=>
  float(79.176)
  [87]=>
  float(116.053)
  [88]=>
  float(142.82)
  [89]=>
  float(161.558)
  [90]=>
  float(272.618)
  [91]=>
  float(177.272)
  [92]=>
  float(120.45)
  [93]=>
  float(110.34)
  [94]=>
  float(77.443)
  [95]=>
  float(54.6)
  [96]=>
  float(29.496)
  [97]=>
  float(-13.061)
  [98]=>
  float(-41.546)
  [99]=>
  float(16.307)
  [100]=>
  float(-4.045)
  [101]=>
  float(-3.436)
  [102]=>
  float(-95.484)
  [103]=>
  float(-93.137)
  [104]=>
  float(-66.804)
  [105]=>
  float(-10.291)
  [106]=>
  float(151.338)
  [107]=>
  float(83.321)
  [108]=>
  float(103.834)
  [109]=>
  float(4.326)
  [110]=>
  float(-16.534)
  [111]=>
  float(3.187)
  [112]=>
  float(38.321)
  [113]=>
  float(160.006)
  [114]=>
  float(126.002)
  [115]=>
  float(107.807)
  [116]=>
  float(165.267)
  [117]=>
  float(143.882)
  [118]=>
  float(90.215)
  [119]=>
  float(77.458)
  [120]=>
  float(89.306)
  [121]=>
  float(63.5)
  [122]=>
  float(76.687)
  [123]=>
  float(146.579)
  [124]=>
  float(167.587)
  [125]=>
  float(171.898)
  [126]=>
  float(146.955)
  [127]=>
  float(120.795)
  [128]=>
  float(120.977)
  [129]=>
  float(134.069)
  [130]=>
  float(126.293)
  [131]=>
  float(112.159)
  [132]=>
  float(96.275)
  [133]=>
  float(73.73)
  [134]=>
  float(65.727)
  [135]=>
  float(45.768)
  [136]=>
  float(-117.066)
  [137]=>
  float(-123.433)
  [138]=>
  float(-168.056)
  [139]=>
  float(-151.476)
  [140]=>
  float(-129.889)
  [141]=>
  float(-85.175)
  [142]=>
  float(-48.889)
  [143]=>
  float(-66.119)
  [144]=>
  float(-58.694)
  [145]=>
  float(-84.422)
  [146]=>
  float(-124.83)
  [147]=>
  float(-129.746)
  [148]=>
  float(-89.528)
  [149]=>
  float(-20.908)
  [150]=>
  float(-50.239)
  [151]=>
  float(-112.461)
  [152]=>
  float(-34.499)
  [153]=>
  float(-39.355)
  [154]=>
  float(7.646)
  [155]=>
  float(116.547)
  [156]=>
  float(158.549)
  [157]=>
  float(83.393)
  [158]=>
  float(0.731)
  [159]=>
  float(-19.823)
  [160]=>
  float(26.571)
  [161]=>
  float(-50.582)
  [162]=>
  float(-44.718)
  [163]=>
  float(8.504)
  [164]=>
  float(20.073)
  [165]=>
  float(2.302)
  [166]=>
  float(28.039)
  [167]=>
  float(127.753)
  [168]=>
  float(51.247)
  [169]=>
  float(165.643)
  [170]=>
  float(206.127)
  [171]=>
  float(169.4)
  [172]=>
  float(169.588)
  [173]=>
  float(152.545)
  [174]=>
  float(91.097)
  [175]=>
  float(72.849)
  [176]=>
  float(63.512)
  [177]=>
  float(16.948)
  [178]=>
  float(-62.967)
  [179]=>
  float(-30.794)
  [180]=>
  float(-73.937)
  [181]=>
  float(-118.563)
  [182]=>
  float(-152.104)
  [183]=>
  float(-129.617)
  [184]=>
  float(-102.869)
  [185]=>
  float(-94.092)
  [186]=>
  float(-117.191)
  [187]=>
  float(-105.664)
  [188]=>
  float(-137.612)
  [189]=>
  float(-111.141)
  [190]=>
  float(-56.097)
  [191]=>
  float(-72.058)
  [192]=>
  float(-133.043)
  [193]=>
  float(-190.534)
  [194]=>
  float(-131.53)
  [195]=>
  float(-157.977)
  [196]=>
  float(-189.314)
  [197]=>
  float(-154.939)
  [198]=>
  float(-118.989)
  [199]=>
  float(-100.74)
  [200]=>
  float(-84.664)
  [201]=>
  float(-50.347)
  [202]=>
  float(-222.764)
  [203]=>
  float(-161.606)
  [204]=>
  float(-142.289)
  [205]=>
  float(-97.546)
  [206]=>
  float(-90.745)
  [207]=>
  float(-67.739)
  [208]=>
  float(-31.939)
  [209]=>
  float(-29.799)
  [210]=>
  float(-47.593)
  [211]=>
  float(-48.211)
  [212]=>
  float(-78.268)
  [213]=>
  float(-88.854)
  [214]=>
  float(-58.279)
  [215]=>
  float(-13.903)
  [216]=>
  float(75.24)
  [217]=>
  float(55.01)
  [218]=>
  float(17.241)
  [219]=>
  float(6.648)
  [220]=>
  float(-22.241)
  [221]=>
  float(-39.452)
  [222]=>
  float(105.509)
  [223]=>
  float(298.544)
  [224]=>
  float(270.812)
  [225]=>
  float(185.82)
  [226]=>
  float(96.143)
  [227]=>
  float(92.454)
  [228]=>
  float(67.11)
  [229]=>
  float(46.035)
  [230]=>
  float(41.664)
  [231]=>
  float(57.815)
  [232]=>
  float(135.973)
  [233]=>
  float(184.931)
  [234]=>
  float(179.485)
  [235]=>
  float(157.388)
  [236]=>
  float(99.804)
  [237]=>
  float(7.668)
  [238]=>
  float(7.44)
  [239]=>
  float(-7.267)
  [240]=>
  float(-46.046)
  [241]=>
  float(-23.871)
  [242]=>
  float(-3.429)
  [243]=>
  float(-26.208)
  [244]=>
  float(-31.367)
  [245]=>
  float(-53.318)
  [246]=>
  float(-42.635)
  [247]=>
  float(-33.685)
  [248]=>
  float(-9.749)
  [249]=>
  float(-7.381)
  [250]=>
  float(24.943)
  [251]=>
  float(-98.36)
}