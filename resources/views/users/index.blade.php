@extends('users.layout.layout')

@section('content')
    <main class="page">
        <section class="dark">
            <div class="container">
                <div class="block-heading"></div>
                <div class="block-heading"></div>
                <div class="block-heading"></div>
                <div class="block-heading"></div>
            </div>
        </section>
        <section class="clean-block clean-info dark" style="padding-top:50px; padding-bottom: 50px">
            <div class="container">
                <div class="text-center">
                    <h1 class="text-info" style="font-size: 50px;">External Dynamic List Manager</h1>
                    <p style="font-size: 29px;">Manage all your firewall's external lists or feeds from a single location
                        <br>
                    </p>
                </div>
            </div>
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Overview</h2>
                    <p>Stop using custom scripts or software that you have to maintain to manage your external firewall
                        lists. <br>
                        <br>Choose the easier, more reliable way.
                    </p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img class="img-thumbnail" src="assets/static/img/sources.png">
                    </div>
                    <div class="col-md-6">
                        <h3>Data Source Collection</h3>
                        <div class="getting-started-info">
                            <p>Our portal connects to your external lists and ingests their data at a recurring check
                                interval.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3>Support for JSON Filters</h3>
                        <div class="getting-started-info">
                            <p>Apply filters to JSON data sources and select the data you want</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-thumbnail" src="assets/static/img/json_filters.png">
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img class="img-thumbnail" src="assets/static/img/lists.png">
                    </div>
                    <div class="col-md-6">
                        <h3>Published your source(s) to a list URL</h3>
                        <div class="getting-started-info">
                            <p>Combine sources into a published Dynamic List. Each list you create has a custom URL.
                                Configure your firewall to read this URL. <br>
                                <br>Identify sources with data you want excluded from your list.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3>Source Templates</h3>
                        <div class="getting-started-info">
                            <p>Don't know what you want? Want the simple answer? <br>
                                <br>Clone from our list of source templates. We have templates serving several categories.
                                View our templates <a href="sourcetemplates/index.html">here</a>.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-thumbnail" src="assets/static/img/templates.png">
                    </div>
                </div>
            </div>
        </section>
        <section id="Features" class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Features</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box">
                        <i class="icon-pencil icon"></i>
                        <h4>Sources</h4>
                        <p>Ingest several types of data sources</p>
                        <ul>
                            <li>IP Address lists</li>
                            <li>URL or Domain lists</li>
                            <li>JSON</li>
                            <li>Manual entries</li>
                        </ul>
                        <p>Filter your JSON data to retrieve specific data points</p>
                    </div>
                    <div class="col-md-5 feature-box">
                        <i class="icon-list icon"></i>
                        <h4>Dynamic Lists</h4>
                        <ul>
                            <li>Aggregate from 1 or more data sources</li>
                            <li>Exclude data found in 1 or more sources</li>
                            <li>Support for HTTP Basic Auth on URLs</li>
                            <li>Always HTTPS</li>
                        </ul>
                    </div>
                    <div class="col-md-5 feature-box">
                        <i class="icon-notebook icon"></i>
                        <h4>Source Templates</h4>
                        <p>Clone a Source Template and get working faster <br>
                            <br>
                        </p>
                    </div>
                    <div class="col-md-5 feature-box">
                        <i class="icon-lock-open icon"></i>
                        <h4>Firewall Manufacturer Agnostic</h4>
                        <p>Our lists output in a format that can be ingested by most major firewall manufacturers.
                            <pre>1.1.1.1
																																<br>8.8.8.8
																																	<br>100.64.0.0/10
																																	</pre>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block clean-pricing dark">
            <div class="container">
                <div id="Pricing" class="block-heading">
                    <h2 class="text-info">Pricing Plans</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 col-lg-4 d-flex flex-column">
                        <div class="clean-pricing-item h-100 d-flex flex-column">
                            <div class="heading">
                                <h3>Basic</h3>
                            </div>
                            <p>Perfect for individuals or testing</p>
                            <div class="features">
                                <h4>
                                    <span class="feature">Limits on Lists and Sources</span>
                                    <br>Max EDLs: 2 <br>Max Sources: 4
                                </h4>
                                <h4>
                                    <span class="feature">Limits on check intervals</span>
                                    <br>1, 6, or 12 hours
                                </h4>
                                <h4>
                                    <span class="feature">Single User</span>
                                </h4>
                                <h4>
                                    <span class="feature">Support: <br>
                                    </span>
                                    <span>Online Docs. Only</span>
                                </h4>
                            </div>
                            <div class="price mt-auto">
                                <h4>Free</h4>
                                <a class="btn btn-outline-primary btn-block" href="account/signup/index.html">Sign Up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4 d-flex flex-column">
                        <div class="clean-pricing-item h-100 d-flex flex-column">
                            <div class="heading">
                                <h3>Business</h3>
                            </div>
                            <p>More suitable for production environments</p>
                            <div class="features">
                                <h4>
                                    <span class="feature">No limits on lists and sources</span>
                                </h4>
                                <h4>
                                    <span class="feature">No limits on check intervals</span>
                                    <br> 5, 15, 30 minutes, 1, 6, 12 hours
                                </h4>
                                <h4>
                                    <span class="feature">Customize HTTP Requests</span>
                                    <br>GET, POST, custom headers, payload, authentication
                                </h4>
                                <h4>
                                    <span class="feature">Advanced EDL Filtering</span>
                                </h4>
                                <h4>
                                    <span class="feature">Manage Multiple Users</span>
                                </h4>
                                <h4>
                                    <span class="feature">Tag Based Permissions</span>
                                </h4>
                                <h4>
                                    <span class="feature">API for Manual Sources</span>
                                </h4>
                                <h4>
                                    <span class="feature">Advanced Security Options</span>
                                    <span>
                                        <br />2FA <br />Config Audit <br />User Auth Audit <br />
                                    </span>
                                </h4>
                                <h4>
                                    <span class="feature">Support: <br />
                                    </span>
                                    <span>Online Docs. <br />Open Ticket <br />
                                    </span>
                                </h4>
                            </div>
                            <div class="price mt-auto">
                                <h4>$185 /Year</h4>
                                <a class="btn btn-primary btn-block" href="account/signup/index7fa5.html?plan=Business">Buy
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4 d-flex flex-column">
                        <div class="clean-pricing-item h-100 d-flex flex-column">
                            <div class="heading">
                                <h3>Managed Service Provider</h3>
                            </div>
                            <p>Allow your clients to consume EDLs <br> Price based on clients using service </p>
                            <div class="features">
                                <h4>
                                    <span class="feature">All features of Business</span>
                                </h4>
                                <h4>
                                    <span class="feature">Custom hostname to serve EDL</span>
                                    <br>Ex. edl.mycompany.com
                                </h4>
                            </div>
                            <div class="price mt-auto">
                                <a class="btn btn-primary btn-block" href="contact/index.html">Get more Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
