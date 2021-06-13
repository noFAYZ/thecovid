<?php

$client = new http\Client;
$request = new http\Client\Request;

$request->setRequestUrl('https://coronavirus-smartable.p.rapidapi.com/stats/v1/US/');
$request->setRequestMethod('GET');
$request->setHeaders([
	'x-rapidapi-key' => 'SIGN-UP-FOR-KEY',
	'x-rapidapi-host' => 'coronavirus-smartable.p.rapidapi.com'
]);

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Covid-19 Surveillance Dashboard | FAST NUCES Peshawar</title>
    <link rel="icon" type="image/png" href="assets/img/newlog.png" />

    <!--Core CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet">

</head>

<body>
    <div id="huro-app" class="app-wrapper">

        <div class="app-overlay"></div>

        <!-- Pageloader -->
        <div class="pageloader is-full"></div>
        <div class="infraloader is-full is-active"></div>
        <nav class="navbar mobile-navbar no-shadow is-hidden-desktop is-hidden-tablet" aria-label="main navigation">
            <div class="container">
                <!-- Brand -->
                <div class="navbar-brand">
                    <!-- Mobile menu toggler icon -->
                    <div class="brand-start">
                        <div class="navbar-burger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <a class="navbar-item is-brand" href="index-2.html">
                        <img class="light-image" src="assets/img/newlog.svg" alt="">
                        <img class="dark-image" src="assets/img/newlog.svg" alt="">
                    </a>

                 

                </div>
            </div>
        </nav>
        <div class="mobile-main-sidebar">
            <div class="inner">
                <ul class="icon-side-menu">
                    <li>
                        <a href="admin-dashboards-personal-1.html" id="home-sidebar-menu-mobile">
                            <i data-feather="activity"></i>
                        </a>
                    </li>
                    <li>
                        <a href="admin-grid-users-1.html" id="layouts-sidebar-menu-mobile">
                            <i data-feather="grid"></i>
                        </a>
                    </li>
                    <li>
                        <a href="elements-hub.html" id="elements-sidebar-menu-mobile">
                            <i data-feather="box"></i>
                        </a>
                    </li>
                    <li>
                        <a href="components-hub.html" id="components-sidebar-menu-mobile">
                            <i data-feather="cpu"></i>
                        </a>
                    </li>
                    <li>
                        <a href="messaging-chat.html" id="open-messages-mobile">
                            <i data-feather="message-circle"></i>
                        </a>
                    </li>
                </ul>

                <ul class="bottom-icon-side-menu">
                    <li>
                        <a href="javascript:" class="right-panel-trigger" data-panel="search-panel">
                            <i data-feather="search"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i data-feather="settings"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="webapp-navbar">
            <div class="webapp-navbar-inner">
                <div class="left">
                    <a href="index.html" class="brand">
                        <img class="light-image" src="assets/img/newlog.png" alt="" />
                        <img class="dark-image" src="assets/img/newlog.png" alt="" />
                    </a>
                    <div class="separator"></div>
             
                    <h1 id="webapp-page-title" class="title is-5">The Covid</h1>
                </div>
                <div class="center">
                    <div id="webapp-navbar-menu" class="centered-links">
                        <a id="dashboards-navbar-menu" class="centered-link centered-link-toggle" data-menu-id="dashboards-webapp-menu">
                            <i data-feather="activity"></i>
                            <span>Dashboard</span>
                        </a>
                
                        <a id="components-navbar-menu" class="centered-link centered-link-toggle" data-menu-id="components-webapp-menu">
                            <i data-feather="cpu"></i>
                            <span>Components</span>
                        </a>
                        <a href="webapp-messaging-chat.html" class="centered-link">
                            <i data-feather="message-circle"></i>
                            <span>Contact Us</span>
                        </a>
                     
                    </div>
                    <div id="webapp-navbar-search" class="centered-search is-hidden">
                        <div class="field">
                            <div class="control has-icon">
                                <input type="text" class="input is-rounded search-input" placeholder="Search records...">
                                <div class="form-icon">
                                    <i data-feather="search"></i>
                                </div>
                                <div id="webapp-navbar-search-close" class="form-icon is-right">
                                    <i data-feather="x"></i>
                                </div>
                                <div class="search-results has-slimscroll"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="toolbar ml-auto">

                        <div class="toolbar-link">
                            <label class="dark-mode ml-auto">
                                <input type="checkbox" checked>
                                <span></span>
                            </label>
                        </div>

                        <a class="toolbar-link right-panel-trigger" data-panel="languages-panel">
                            <img src="assets/img/icons/flags/pakistan.svg" alt="">
                        </a>

                    </div>
                   
                </div>
            </div>
        </div>

        <div id="languages-panel" class="right-panel-wrapper is-languages">
            <div class="panel-overlay"></div>

            <div class="right-panel">
                <div class="right-panel-head">
                    <h3>Select Language</h3>
                    <a class="close-panel">
                        <i data-feather="chevron-right"></i>
                    </a>
                </div>
                <div class="right-panel-body has-slimscroll">
                    <div class="languages-boxes">
                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection" checked>
                                <div class="language-option-inner">
                                    <img src="assets/img/icons/flags/pakistan.svg" alt="">
                                    <div class="indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="assets/img/icons/flags/france.svg" alt="">
                                    <div class="indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="assets/img/icons/flags/spain.svg" alt="">
                                    <div class="indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="assets/img/icons/flags/germany.svg" alt="">
                                    <div class="indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="assets/img/icons/flags/mexico.svg" alt="">
                                    <div class="indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="assets/img/icons/flags/china.svg" alt="">
                                    <div class="indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="img-wrap has-text-centered">
                        <img class="light-image" src="assets/img/illustrations/right-panel/languages.svg" alt="">
                        <img class="dark-image" src="assets/img/illustrations/right-panel/languages-dark.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    

     
        <!-- Content Wrapper -->
        <div class="view-wrapper is-webapp" data-page-title="Dashboard" data-naver-offset="150" data-menu-item="#dashboards-navbar-menu" data-mobile-item="#home-sidebar-menu-mobile">

            <div class="page-content-wrapper">
                <div class="page-content is-relative">

                    <div class="page-title has-text-centered is-webapp">

                        <div class="title-wrap">
                            <h1 class="title is-4">Covid-19 Twitter Surveillance</h1>
                        </div>

                        <div class="toolbar ml-auto">

                            <div class="toolbar-link">
                                <label class="dark-mode ml-auto">
                                    <input type="checkbox" checked>
                                    <span></span>
                                </label>
                            </div>

                            <a class="toolbar-link right-panel-trigger" data-panel="languages-panel">
                                <img src="assets/img/icons/flags/pakistan.svg" alt="">
                            </a>



                            <a class="toolbar-link right-panel-trigger" data-panel="activity-panel">
                                <i data-feather="grid"></i>
                            </a>
                        </div>
                    </div>

                    <div class="page-content-inner">

                        <!--Ecommerce Dashboard V1-->
                        <div class="ecommerce-dashboard ecommerce-dashboard-v1">

                            <!--Header-->
                            <div class="dashboard-header">
                                <div class="h-avatar is-large">
                                    <img class="avatar" src="assets/img/twitter2.png"  alt="">
                                </div>
                                <div class="start">
                                    <h3 class="dark-inverted">Covid-19 Twitter Surveillance</h3>
                                    <p>Get the insights about Covid-19 Pandemic and monitor Twitter's behaviour.</p>
                                </div>
                                <div class="end">
                                    
                                    <button class="button h-button is-primary is-elevated">Follow to get updates on Twitter!</button>
                                </div>
                            </div>

                            <div class="columns is-multiline">

                                <!--Dashboard tile-->
                                <div class="column is-3">
                                    <div class="dashboard-tile">
                                        <div class="tile-head">
                                            <h3>Total Sales</h3>
                                            <div class="h-icon is-info is-rounded">
                                                <i data-feather="gift"></i>
                                            </div>
                                        </div>
                                        <div class="dashboard-tile-inner">
                                            <div class="left">
                                                <span class="dark-inverted">641.4K</span>
                                            </div>
                                            <div class="right">
                                                <div id="spark1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Dashboard tile-->
                                <div class="column is-3">
                                    <div class="dashboard-tile">
                                        <div class="tile-head">
                                            <h3>Total Income</h3>
                                            <div class="h-icon is-purple is-rounded">
                                                <i data-feather="dollar-sign"></i>
                                            </div>
                                        </div>
                                        <div class="dashboard-tile-inner">
                                            <div class="left">
                                                <span class="dark-inverted">$389.9K</span>
                                            </div>
                                            <div class="right">
                                                <div id="spark2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Dashboard tile-->
                                <div class="column is-3">
                                    <div class="dashboard-tile">
                                        <div class="tile-head">
                                            <h3>New Orders</h3>
                                            <div class="h-icon is-green is-rounded">
                                                <i data-feather="box"></i>
                                            </div>
                                        </div>
                                        <div class="dashboard-tile-inner">
                                            <div class="left">
                                                <span class="dark-inverted">371</span>
                                            </div>
                                            <div class="right">
                                                <div id="spark3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Dashboard tile-->
                                <div class="column is-3">
                                    <div class="dashboard-tile">
                                        <div class="tile-head">
                                            <h3>Abandonned</h3>
                                            <div class="h-icon is-orange is-rounded">
                                                <i data-feather="shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="dashboard-tile-inner">
                                            <div class="left">
                                                <span class="dark-inverted">29</span>
                                            </div>
                                            <div class="right">
                                                <div id="spark4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Line Stats Widget-->
                                <div class="column is-6">
                                    <div class="stat-widget line-stats-widget is-straight">
                                        <div class="widget-head">
                                            <h3 class="dark-inverted">Revenue</h3>
                                            <!--Dropdown-->
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <i data-feather="more-vertical"></i>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-reload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Reload</span>
                                                                <span>Reload chart</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-users-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Customers</span>
                                                                <span>View customer reports</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-gift-alt-1"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Products</span>
                                                                <span>View product reports</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-bank"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Finance</span>
                                                                <span>View financial reports</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="line-stats">
                                            <div class="line-stat">
                                                <span>This Month</span>
                                                <span class="current">$75,648.43</span>
                                            </div>
                                            <div class="line-stat">
                                                <span>Last Month</span>
                                                <span class="dark-inverted">$91,512.18</span>
                                            </div>
                                        </div>
                                        <div id="line-stats-widget-chart"></div>
                                    </div>
                                </div>

                                <!--Line Stats Widget-->
                                <div class="column is-6">
                                    <div class="stat-widget area-stats-widget is-straight">
                                        <div class="widget-head">
                                            <h3 class="dark-inverted">Customers</h3>
                                            <!--Dropdown-->
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <i data-feather="more-vertical"></i>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-reload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Reload</span>
                                                                <span>Reload chart</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-users-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Customers</span>
                                                                <span>View customer reports</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-gift-alt-1"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Products</span>
                                                                <span>View product reports</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-bank"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Finance</span>
                                                                <span>View financial reports</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="area-stats">
                                            <div class="area-stat">
                                                <span>New Customers</span>
                                                <span class="current">249</span>
                                            </div>
                                            <div class="area-stat">
                                                <span>Returning</span>
                                                <span class="dark-inverted">684</span>
                                            </div>
                                        </div>
                                        <div id="area-stats-widget-chart"></div>
                                    </div>
                                </div>

                                <!--Flex Stat Widget-->
                                <div class="column is-6">
                                    <div class="stat-widget flex-stat-widget is-straight">
                                        <div class="chart-media">
                                            <div class="meta">
                                                <h4 class="dark-inverted">Product Returns</h4>
                                                <span class="is-dark-primary">Avg. 642</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bonum integritas
                                                    corporis: misera debilitas. Ita ne hoc quidem modo paria.</p>
                                            </div>
                                            <div class="chart-container">
                                                <div id="flex-stat-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Flex Stat Widget-->
                                <div class="column is-6">
                                    <div class="stat-widget flex-stat-widget is-straight has-fullheight">
                                        <div class="chart-media">
                                            <div class="meta">
                                                <h4 class="dark-inverted">Customer Engagement</h4>
                                                <span class="is-dark-primary">+34.2%</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bonum integritas
                                                    corporis: misera debilitas. Ita ne hoc quidem modo paria.</p>
                                            </div>
                                            <div class="chart-container">
                                                <div id="flex-stat-radial"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grouped Stat Widget-->
                                <div class="column is-6">
                                    <div class="stat-widget grouped-stat-widget is-straight">
                                        <div class="widget-head">
                                            <h3 class="dark-inverted">Shipping Stats</h3>
                                        </div>
                                        <div class="chart-group">
                                            <div class="group">
                                                <div class="group-content">
                                                    <div class="chart-container">
                                                        <div id="widget-group-radial-1"></div>
                                                    </div>
                                                    <span class="dark-inverted">36.8K</span>
                                                    <p>Free Shipping</p>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div class="group-content">
                                                    <div class="chart-container">
                                                        <div id="widget-group-radial-2"></div>
                                                    </div>
                                                    <span class="dark-inverted">292.3K</span>
                                                    <p>Ground Shipping</p>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div class="group-content">
                                                    <div class="chart-container">
                                                        <div id="widget-group-radial-3"></div>
                                                    </div>
                                                    <span class="dark-inverted">108.2K</span>
                                                    <p>Next Day Air</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grouped Stat Widget-->
                                <div class="column is-6">
                                    <div class="stat-widget grouped-stat-widget is-straight">
                                        <div class="widget-head">
                                            <h3 class="dark-inverted">Customer Support</h3>
                                        </div>
                                        <div class="chart-group">
                                            <div class="group">
                                                <div class="group-content">
                                                    <div class="chart-container is-gauge">
                                                        <div id="widget-group-radial-4"></div>
                                                    </div>
                                                    <span class="dark-inverted">641</span>
                                                    <p>Active Tickets</p>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div class="group-content">
                                                    <div class="chart-container is-gauge">
                                                        <div id="widget-group-radial-5"></div>
                                                    </div>
                                                    <span class="dark-inverted">84</span>
                                                    <p>Escalated</p>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div class="group-content">
                                                    <div class="chart-container is-gauge">
                                                        <div id="widget-group-radial-6"></div>
                                                    </div>
                                                    <span class="dark-inverted">1,749</span>
                                                    <p>Closed Tickets</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Table-->
                                <div class="column is-12">

                                    <!--Header-->
                                    <div class="table-header">
                                        <h3 class="dark-inverted">Recent Orders</h3>
                                        <div class="field">
                                            <div class="control">
                                                <div class="h-select">
                                                    <div class="select-box">
                                                        <span>Last 30 days</span>
                                                    </div>
                                                    <div class="select-icon">
                                                        <i data-feather="chevron-down"></i>
                                                    </div>
                                                    <div class="select-drop has-slimscroll-sm">
                                                        <div class="drop-inner">
                                                            <div class="option-row">
                                                                <input type="radio" name="instagram_period_select">
                                                                <div class="option-meta">
                                                                    <span>Last Week</span>
                                                                </div>
                                                            </div>
                                                            <div class="option-row">
                                                                <input type="radio" name="instagram_period_select">
                                                                <div class="option-meta">
                                                                    <span>Last 30 days</span>
                                                                </div>
                                                            </div>
                                                            <div class="option-row">
                                                                <input type="radio" name="instagram_period_select">
                                                                <div class="option-meta">
                                                                    <span>Last 60 days</span>
                                                                </div>
                                                            </div>
                                                            <div class="option-row">
                                                                <input type="radio" name="instagram_period_select">
                                                                <div class="option-meta">
                                                                    <span>Last 90 days</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex-table">

                                        <!--Table header-->
                                        <div class="flex-table-header">
                                            <span class="is-grow">Customer</span>
                                            <span>Date</span>
                                            <span>Amount</span>
                                            <span>Status</span>
                                            <span>Tracking</span>
                                            <span class="cell-end">Actions</span>
                                        </div>

                                        <!--Table item-->
                                        <div class="flex-table-item">
                                            <div class="flex-table-cell is-media is-grow" data-th="">
                                                <div class="h-avatar is-medium">
                                                    <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                                                </div>
                                                <div>
                                                    <span class="item-name dark-inverted is-font-alt is-weight-600">Erik K.</span>
                                                    <span class="item-meta">
                                                            <span>#158456</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-table-cell" data-th="Date">
                                                <span class="light-text">Oct 31, 2020</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Amount">
                                                <span class="dark-inverted is-weight-500">$863.42</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Status">
                                                <span class="tag is-green is-rounded">Paid</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Tracking">
                                                <a class="action-link is-pushed-mobile">TR-7295</a>
                                            </div>
                                            <div class="flex-table-cell cell-end" data-th="Actions">
                                                <button class="button h-button is-dark-outlined is-pushed-mobile">View Order</button>
                                            </div>
                                        </div>

                                        <!--Table item-->
                                        <div class="flex-table-item">
                                            <div class="flex-table-cell is-media is-grow" data-th="">
                                                <div class="h-avatar is-medium">
                                                    <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/22.jpg" alt="">
                                                </div>
                                                <div>
                                                    <span class="item-name dark-inverted is-font-alt is-weight-600">Jimmy H.</span>
                                                    <span class="item-meta">
                                                            <span>#15893</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-table-cell" data-th="Date">
                                                <span class="light-text">Oct 31, 2020</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Amount">
                                                <span class="dark-inverted is-weight-500">$128.00</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Status">
                                                <span class="tag is-green is-rounded">Paid</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Tracking">
                                                <a class="action-link is-pushed-mobile">TR-6259</a>
                                            </div>
                                            <div class="flex-table-cell cell-end" data-th="Actions">
                                                <button class="button h-button is-dark-outlined is-pushed-mobile">View Order</button>
                                            </div>
                                        </div>

                                        <!--Table item-->
                                        <div class="flex-table-item">
                                            <div class="flex-table-cell is-media is-grow" data-th="">
                                                <div class="h-avatar is-medium">
                                                    <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/25.jpg" alt="">
                                                </div>
                                                <div>
                                                    <span class="item-name dark-inverted is-font-alt is-weight-600">Melany W.</span>
                                                    <span class="item-meta">
                                                            <span>#155848</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-table-cell" data-th="Date">
                                                <span class="light-text">Oct 31, 2020</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Amount">
                                                <span class="dark-inverted is-weight-500">$236.79</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Status">
                                                <span class="tag is-orange is-rounded">Pending</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Tracking">
                                                <span class="light-text is-pushed-mobile">N/A</span>
                                            </div>
                                            <div class="flex-table-cell cell-end" data-th="Actions">
                                                <button class="button h-button is-dark-outlined is-pushed-mobile">View Order</button>
                                            </div>
                                        </div>

                                        <!--Table item-->
                                        <div class="flex-table-item">
                                            <div class="flex-table-cell is-media is-grow" data-th="">
                                                <div class="h-avatar is-medium">
                                                    <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/12.jpg" alt="">
                                                </div>
                                                <div>
                                                    <span class="item-name dark-inverted is-font-alt is-weight-600">Joshua S.</span>
                                                    <span class="item-meta">
                                                            <span>#154736</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-table-cell" data-th="Date">
                                                <span class="light-text">Oct 30, 2020</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Amount">
                                                <span class="dark-inverted is-weight-500">$98.31</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Status">
                                                <span class="tag is-green is-rounded">Paid</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Tracking">
                                                <a class="action-link is-pushed-mobile">TR-48951</a>
                                            </div>
                                            <div class="flex-table-cell cell-end" data-th="Actions">
                                                <button class="button h-button is-dark-outlined is-pushed-mobile">View Order</button>
                                            </div>
                                        </div>

                                        <!--Table item-->
                                        <div class="flex-table-item">
                                            <div class="flex-table-cell is-media is-grow" data-th="">
                                                <div class="h-avatar is-medium">
                                                    <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" alt="">
                                                </div>
                                                <div>
                                                    <span class="item-name dark-inverted is-font-alt is-weight-600">Tina C.</span>
                                                    <span class="item-meta">
                                                            <span>#158315</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-table-cell" data-th="Date">
                                                <span class="light-text">Oct 30, 2020</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Amount">
                                                <span class="dark-inverted is-weight-500">$112.00</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Status">
                                                <span class="tag is-green is-rounded">Paid</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Tracking">
                                                <a class="action-link is-pushed-mobile">TR-48555</a>
                                            </div>
                                            <div class="flex-table-cell cell-end" data-th="Actions">
                                                <button class="button h-button is-dark-outlined is-pushed-mobile">View Order</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
        <!-- Concatenated plugins -->
        <script src="assets/js/app.js"></script>

        <!-- Huro js -->
        <script src="assets/js/functions.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/components.js"></script>
        <script src="assets/js/popover.js"></script>
        <script src="assets/js/widgets.js"></script>


        <!-- Additional Features -->
        <script src="assets/js/touch.js"></script>

        <!-- Landing page js -->

        <!-- Dashboards js -->
















        <script src="assets/js/ecommerce-1.js"></script>

        <!-- Charts js -->


        <!--Forms-->

        <!--Wizard-->

        <!-- Layouts js -->












        <script src="assets/js/syntax.js"></script>
    </div>
</body>


<!-- Mirrored from huro.cssninja.io/webapp-dashboards-ecommerce-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jun 2021 11:16:22 GMT -->
</html>
?>