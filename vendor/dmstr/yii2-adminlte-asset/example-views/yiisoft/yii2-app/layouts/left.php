<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/astro/backend/web/images/astroww.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Admin</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
<!--         <form action="#" method="get" class="sidebar-form"> -->
<!--             <div class="input-group"> -->
<!--                 <input type="text" name="q" class="form-control" placeholder="Search..."/> -->
<!--               <span class="input-group-btn"> -->
<!--                 <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i> -->
<!--                 </button> -->
<!--               </span> -->
<!--             </div> -->
<!--         </form> -->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                		['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['/']],
//                     ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],

                        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                		['label' => 'Users', 'icon' => 'plus-circle', 'url' => ['users/index']],
                		['label' => 'Planets', 'icon' => 'plus-circle', 'url' => ['planets/index']],
                		//['label' => 'Characters', 'icon' => 'plus-circle', 'url' => ['characters/index']],
                		['label' => 'Raasi_Details', 'icon' => 'plus-circle', 'url' => ['rashi/index']],
                		//['label' => 'Horoscope Details', 'icon' => 'plus-circle', 'url' => ['horoscopeplanets/index']],
                		//['label' => 'Planet Relations', 'icon' => 'plus-circle', 'url' => ['planetrelations/index']],
                		//['label' => 'Planet Transistion', 'icon' => 'plus-circle', 'url' => ['planettransistion/index']],
                		['label' => 'Gochara_Phalam', 'icon' => 'plus-circle', 'url' => ['planetspositions/index']],
                		['label' => 'Gocharam Daily', 'icon' => 'plus-circle', 'url' => ['gochaaramdaily/index']],
                		['label' => 'Gocharam Monthly', 'icon' => 'plus-circle', 'url' => ['monthly/index']],
                		['label' => 'Gocharam Yearly', 'icon' => 'plus-circle', 'url' => ['yearly/index']],
                		['label' => 'Planet Transistion', 'icon' => 'plus-circle', 'url' => ['dailyplanets/index']],
                		['label' => 'Planet Transistion CSV Import', 'icon' => 'plus-circle', 'url' => ['dailyplanets/upload']],
                		['label' => 'Prediction By Planet Rasi', 'icon' => 'plus-circle', 'url' => ['predictionbyplanetraasi/index']],
                		['label' => 'PredictionLord In OtherLordRasi', 'icon' => 'plus-circle', 'url' => ['predictionlardrasi/index']],
                		['label' => 'Gochaaram Indicator', 'icon' => 'plus-circle', 'url' => ['gochaaramindicator/index']],
                		['label' => 'Gochaaram Planet Color', 'icon' => 'plus-circle', 'url' => ['gochaaramplanetcolor/index']],
                		['label' => 'Compatibility Info', 'icon' => 'plus-circle', 'url' => ['compatibilityinfo/index']],
                		['label' => 'Strength PredictionLordInOtherL', 'icon' => 'plus-circle', 'url' => ['strengthpliol/index']],
                		['label' => 'Lagna Results', 'icon' => 'plus-circle', 'url' => ['lagnaresults/index']],
                		['label' => 'Bhava Details', 'icon' => 'plus-circle', 'url' => ['bhavadetails/index']],
                		['label' => 'Notifications', 'icon' => 'plus-circle', 'url' => ['notifications/index']],
                		
                ],
            ]
        ) ?>

    </section>

</aside>
