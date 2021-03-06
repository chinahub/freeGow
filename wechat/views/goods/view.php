<?php
use yii\helpers\Html;
use common\components\ResizeImage;
use yii\widgets\ActiveForm;

?>
<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title><?= $model->goods_name ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="YES">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script type="text/javascript" src="http://7xt1hu.com1.z0.glb.clouddn.com/1461160588jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="http://7xt1hu.com1.z0.glb.clouddn.com/1461123449bootstrap.min.css" type="text/css"
          media="screen">
    <script type="text/javascript" src="http://7xt1hu.com1.z0.glb.clouddn.com/1461123616bootstrap.min.js"></script>
    <link rel="stylesheet" href="/static/css/layout.css?time=1461739466" type="text/css" media="screen">
    <link rel="stylesheet" href="http://7xt1hu.com1.z0.glb.clouddn.com/1461128081font-awesome.min.css" type="text/css"
          media="screen">
    <script type="text/javascript" src="http://7xt1hu.com1.z0.glb.clouddn.com/TouchSlide.js"></script>
    <script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461128850jquery.lazyload.min.js"></script>

    <script src="/static/js/layout.js?time=1461741850"></script>
    <link rel="stylesheet" href="/static/css/goods-index.css?time=1460434297" type="text/css">
    <script src="/static/js/goods-index.js?time=1460964191"></script>
    <script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461212358jquery.glide.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="http://7xt1hu.com1.z0.glb.clouddn.com/1461211900touchTouch.css" type="text/css">
    <script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461212394touchTouch.jquery.js"></script>
    <link rel="stylesheet" href="http://7xt1hu.com1.z0.glb.clouddn.com/1461232700nav_style_all2.css" type="text/css">
    <!--[if lt IE 9]>
    <script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461217678html5shiv.min.js"></script>
    <script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461217703respond.min.js"></script>
    <![endif]-->
    <script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461232319fakeLoader.min.js"></script>
    <link rel="stylesheet" href="http://7xt1hu.com1.z0.glb.clouddn.com/1461232347fakeLoader.css">
    <script type="text/javascript">

        $(document).ready(function () {
            $(".fakeloader").fakeLoader({
                timeToHide: 1200,
                bgColor: "#666",
                spinner: "spinner1"
            });
            $(".popup").click(function () {
                $(".popup").hide();
                $('.sub-menu').removeClass('show');
            });

            $(".sub-menu").click(function () {
                $(".popup").show();
                $('.sub-menu').addClass('show');
            });
        });

    </script>
</head>

<body class="body-goods-index">
<div class="fakeloader"
     style="position: fixed; width: 100%; height: 100%; top: 0px; left: 0px; background-color: rgb(102, 102, 102); z-index: 999; display: none; ">
    <div class="fl spinner1" style="position: absolute; left: 160px; top: 239.5px; ">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<a id="top" name="top"></a>

<!--个人中心、中间页、活动、普通页面样式-->
<nav class="global-nav fxd no-background">
    <a href="javascript:window.history.go(-1);" class="back hide-font">Back</a>

    <div class="popup"></div>
    <div id="subMenu" class="sub-menu" onsclick="this.className='sub-menu onfocus';">
        <a href="javascript:void(0);" class="menu hide-font">menu</a>
        <ul>
            <li><a href="/">首页</a></li>
            <li><a href="#">个人中心</a></li>
            <li><a href="#">全部０元</a></li>
            <li><a href="#">精品区</a></li>
            <li><a href="#">零元砍价</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <div id="focusSlide" class="focusSlide">
        <div class="indicators hide">
            <ul>
                <?php foreach ($model->goodsImage as $key => $value): ?>
                    <li class=""><?= $key + 1; ?></li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="items">
            <div class="tempWrap" style="overflow:hidden; position:relative;">
                <div class="tempWrap" style="overflow:hidden; position:relative;">
                    <ul style="width: 5760px; position: relative; overflow: hidden; padding: 0px; margin: 0px; -webkit-transition: 200ms; -webkit-transform: translate(-720px, 0px) translateZ(0px); ">
                        <?php foreach ($model->goodsImage as $key => $value): ?>
                            <li id="zuhe-<?= $value->image_id ?>"
                                style="display: table-cell; vertical-align: top; width: 360px; "><img
                                    src="<?= ResizeImage::resize($model->username, $value->image, 620, 620) ?>"></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tg-userinfo">
            <div class="container">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:void(0);"><img class="media-object" src="/static/images/static/hello.jpg"
                                                           alt="hello world"></a>
                    </div>
                    <div class="media-body">
                        <p class="text-overflow">来自hello world的分享</p>
                    </div>
                </div>
                <a href="javascript:void(0);" class="close-userinfo">关闭/隐藏</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="good-info-wrapper" data-is-onsale="1">
        <h1><?= $model->goods_name ?></h1>
        <ul class="clearfix">
            <li class="good-scprice">市场价格:
                <del>
                    ￥<span><?= $model->sc_price ?></span>
                </del>
            </li>
            <li class="good-price">现价: ￥<span><?= $model->price ?></span></li>
            <li class="good-counts">已被领取：<span>0</span>件
            </li>
            <li class="good-nowcount">剩余：<span><?= $model->goods_cur_stock ?></span>件
            </li>
            <li class="good-wlprice">物流费：<span><?= $model->wl_price ?></span>元
            </li>
        </ul>
        <div class="clearfix color-999 good-usercomments">
            <small>用户好评率：</small>
            <small class="color-bbb"> 100%</small>
            <small>用户投诉率：</small>
            <small class="color-bbb"> 0.00%</small>
        </div>

        <a href="#" class="goods-report">点此举报</a>
    </div>
</div>
<div class="seller-service">
    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=568621896&amp;site=qq&amp;menu=yes"><img
            src="/static/images/static/zixun.jpg" alt="在线咨询"></a>
</div>
<div class="container">
    <?php $form = ActiveForm::begin(['action' => '/cart/create']); ?>
    <?= Html::hiddenInput('goods_id', $model->goods_id) ?>
    <?= Html::hiddenInput('userid', $model->userid) ?>

    <!--
    <div class="panel panel-default good-select">
        <div class="panel-heading">
            <h3 class="panel-title">规格选择</h3>
        </div>
        <div class="panel-body">
                      <div class="form-group zuhe-attr1">
                <div class="good-zu">
                                    <span data-good-id="74337" data-price="0" data-scprice="39" data-wlprice="22" data-good-stock="5000" data-good-nowstock="483" data-spec-id="59859" id="spec-0" class="active">K9660大红色1件</span>


                                    <span data-good-id="74340" data-price="0" data-scprice="39" data-wlprice="22" data-good-stock="5000" data-good-nowstock="495" data-spec-id="59862" id="spec-1">K9660黑色1件</span>


                                    <span data-good-id="74345" data-price="0" data-scprice="39" data-wlprice="22" data-good-stock="5000" data-good-nowstock="485" data-spec-id="59866" id="spec-2">K966肤色1件</span>


                                    <span data-good-id="74348" data-price="0" data-scprice="39" data-wlprice="22" data-good-stock="5000" data-good-nowstock="0" data-spec-id="59869" id="spec-3">K966粉红色1件</span>


                                </div>
            </div>
                    <div class="form-group zuhe-attr2">
                            <div class="good-zuinfo clearfix" id="goodzu-0" style="">
                                    <span data-good-id="74337" data-price="0" data-scprice="39" data-wlprice="22" data-good-stock="5000" data-good-nowstock="483" data-spec-id="59859" class="active">S</span>
                                    <span data-good-id="74338" data-price="0" data-scprice="39" data-wlprice="22" data-good-stock="5000" data-good-nowstock="490" data-spec-id="59860">M</span>
                                    <span data-good-id="74339" data-price="0" data-scprice="39" data-wlprice="22" data-good-stock="5000" data-good-nowstock="493" data-spec-id="59861">L</span>
                                </div>
                            <div class="good-zuinfo clearfix hide" id="goodzu-1" style="display: none; ">
                                    <span data-good-id="74340" data-price="0" data-scprice="39" data-wlprice="22" data-good-stock="5000" data-good-nowstock="495" data-spec-id="59862">S</span>
                                    <span data-good-id="74342" data-price="0" data-scprice="39" data-wlprice="22" data-good-stock="5000" data-good-nowstock="492" data-spec-id="59864">M</span>
                                    <span data-good-id="74343" data-price="0" data-scprice="39" data-wlprice="22" data-good-stock="5000" data-good-nowstock="486" data-spec-id="59865">L</span>
                                </div>
                            <div class="good-zuinfo clearfix hide" id="goodzu-2" style="display: none; ">
                                    <span data-good-id="74345" data-price="0" data-scprice="39" data-wlprice="22" data-good-stock="5000" data-good-nowstock="485" data-spec-id="59866">S</span>
                                    <span data-good-id="74346" data-price="0" data-scprice="39" data-wlprice="22" data-good-stock="5000" data-good-nowstock="478" data-spec-id="59867">M</span>
                                    <span data-good-id="74347" data-price="0" data-scprice="39" data-wlprice="22" data-good-stock="5000" data-good-nowstock="465" data-spec-id="59868">L</span>
                                </div>
                            <div class="good-zuinfo clearfix hide" id="goodzu-3" style="display: none; ">
                                    <span data-good-id="74348" data-price="0" data-scprice="39" data-wlprice="22" data-good-stock="5000" data-good-nowstock="0" data-spec-id="59869">S</span>
                                    <span data-good-id="74349" data-price="0" data-scprice="39" data-wlprice="22" data-good-stock="5000" data-good-nowstock="0" data-spec-id="59870">M</span>
                                    <span data-good-id="74350" data-price="0" data-scprice="39" data-wlprice="22" data-good-stock="5000" data-good-nowstock="0" data-spec-id="59871">L</span>
                                </div>
                        </div>
                  </div>
    </div>
    -->
    <div class="good-action container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button class="btn btn-lg btn-block btn-buy" type="submit">立即领取</button>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

    <?= $this->render('_goods_recommend', ['otherGoods' => $otherGoods]); ?>

    <div class="good-guarantee color-333">微信支付商家,正品保证,假一罚三,七天无条件退换货。</div>

    <div class="good-detail">
        <ul class="nav nav-tabs good-detail-tab">
            <li class="active"><a href="javascript:void(0);" data-target="#description" aria-controls="description"
                                  data-toggle="tab">详情</a></li>
            <li><a href="javascript:void(0);" data-target="#comments" aria-controls="comments" data-toggle="tab">评价<span
                        class="badge">0</span></a></li>

            <li><a href="javascript:void(0);" class="good-counts" data-target="#lists" aria-controls="lists"
                   data-toggle="tab">成交记录<span class="badge">0</span></a></li>
        </ul>

        <div class="tab-content good-detail-content">
            <div role="tabpanel" class="tab-pane fade in active clearfix" id="description">
                <div class="clearfix data-good-description" style="">
                    <p>
                        <?= $model->content->content ?>
                    </p>

                    <p>
                        <br>
                    </p>

                    <p>
                        <br>
                    </p></div>
            </div>
            <div role="tabpanel" class="tab-pane fade in" id="comments">
                <ul class="list-unstyled comments-lists">
                    <li>暂无评论</li>
                </ul>
            </div>

            <div role="tabpanel" class="tab-pane fade in" id="lists">
                <div class="table-responsive goods-orderlists">
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th colspan="2">用户</th>
                            <th>规格</th>
                            <th>数量</th>
                            <th>成交时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="5">
                                暂无成交记录
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?= $this->render('_other_goods', ['otherGoods' => $otherGoods]); ?>
</div>

<script src="http://7xt1hu.com1.z0.glb.clouddn.com/1461240869jweixin-1.0.0.js"></script>
<script>
    wx.config({
        debug: false,
        appId: 'wxcf76715f7ae681c2',
        timestamp: '1462174931',
        nonceStr: 'zPU7noKItIdaECDF',
        signature: '0bd99ce7e62528de8e1c548439923110b0b34208',
        jsApiList: [
            'checkJsApi',
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo',
            'hideMenuItems',
            'showMenuItems',
            'hideAllNonBaseMenuItem',
            'showAllNonBaseMenuItem',
            'translateVoice',
            'startRecord',
            'stopRecord',
            'onRecordEnd',
            'playVoice',
            'pauseVoice',
            'stopVoice',
            'uploadVoice',
            'downloadVoice',
            'chooseImage',
            'previewImage',
            'uploadImage',
            'downloadImage',
            'getNetworkType',
            'openLocation',
            'getLocation',
            'hideOptionMenu',
            'showOptionMenu',
            'closeWindow',
            'scanQRCode',
            'chooseWXPay',
            'openProductSpecificView',
            'addCard',
            'chooseCard',
            'openCard'
        ]
    });
    wx.ready(function () {
        wx.onMenuShareAppMessage({
            title: '来自hello world的分享--零购官网--浪莎吸湿排汗运动抹胸1件',
            desc: '零购官网--浪莎吸湿排汗运动抹胸1件',
            link: 'http://www.0gow.com/goods/74253?token=eyJ0Z19pZCI6MjY5MTc1MTB9',
            imgUrl: 'http://p3.0gow.com/pic0gow_56fd5c1968039?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg',
            trigger: function (res) {
                //alert('用户点击发送给朋友');
            },
            success: function (res) {
                //alert('已分享');
            },
            cancel: function (res) {
                //alert('已取消');
            },
            fail: function (res) {
                //alert(JSON.stringify(res));
            }
        });

        wx.onMenuShareTimeline({
            title: '来自hello world的分享--零购官网--浪莎吸湿排汗运动抹胸1件', // 分享标题
            link: 'http://www.0gow.com/goods/74253?token=eyJ0Z19pZCI6MjY5MTc1MTB9',
            desc: '零购官网--浪莎吸湿排汗运动抹胸1件',
            imgUrl: 'http://p3.0gow.com/pic0gow_56fd5c1968039?imageMogr2/thumbnail/240x/strip/quality/75/format/jpg',
            success: function () {
                // 用户确认分享后执行的回调函数
                //alert('OK');
            },
            cancel: function () {
                //alert('取消');
            }
        });
    });
</script><!--
<div class="to-top">
	返回顶部
</div>
-->
<!--
<div id="galleryOverlay" style="display: none; "><div id="gallerySlider"></div><a id="closeCtr">×</a></div><div class="last-act">	<div class="container clearfix">		<div class="pull-left last-user text-overflow">			<a href="" class="act-link"></a>			<img src="http://p5.0gow.com/icon0gow_5694975289e8f?imageMogr2/thumbnail/64x/strip/quality/80/format/jpg" class="user-avatar">			<p class="color-fff clearfix">				<span class="act-name">虎哥13583387555</span>下了<span class="act-count">1</span>笔订单 <span class="act-timer">2 分钟前</span>			</p>		</div>	</div></div></body><iframe id="__WeixinJSBridgeIframe_SetResult" style="display: none; " src="weixin://private/setresult/SCENE_HANDLEMSGFROMWX&amp;eyJfX2Vycl9jb2RlIjoiZXY0MDQifQ=="></iframe><iframe id="__WeixinJSBridgeIframe" style="display: none; " src="weixin://dispatch_message/"></iframe>
-->
</html>