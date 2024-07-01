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
        <section class="clean-block">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">FAQ</h2>
                </div>
                <div class="block-content">
                    <h2 id="general">General</h2>
                    <div class="accordion" id="accordian-general">
                        <div class="card">
                            <div class="card-header" id="general">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#what-payment-methods-do-you-accept" aria-expanded="true"
                                        aria-controls="what-payment-methods-do-you-accept"> What payment methods do you
                                        accept? </button>
                                </h2>
                            </div>
                            <div id="what-payment-methods-do-you-accept" class="collapse" aria-labelledby="general"
                                data-parent="#accordian-general">
                                <div class="card-body">
                                    <p dir="ltr">Acceptable methods of payments:</p>
                                    <ul>
                                        <li dir="ltr">All major credit cards</li>
                                        <li dir="ltr">Via the AWS Marketplace</li>
                                        <li dir="ltr">Purchase Order/Invoicing (an additional $75 processing fee will
                                            be assessed for PO/invoice purchases)</li>
                                    </ul>
                                    <p dir="ltr">
                                        <br>
                                    </p>
                                    <p dir="ltr">All payments are processed through 4 Ravens, LLC, the owner of EDL
                                        Manager.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="general">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#do-you-support-subscriptionpayment-via-cloud-marketplace"
                                        aria-expanded="true"
                                        aria-controls="do-you-support-subscriptionpayment-via-cloud-marketplace"> Do you
                                        support subscription/payment via cloud marketplace? </button>
                                </h2>
                            </div>
                            <div id="do-you-support-subscriptionpayment-via-cloud-marketplace" class="collapse"
                                aria-labelledby="general" data-parent="#accordian-general">
                                <div class="card-body">
                                    <p dir="ltr">Yes, you can subscribe to EDL Manager via the AWS Marketplace.</p>
                                    <p dir="ltr">
                                        <a
                                            href="https://aws.amazon.com/marketplace/pp/prodview-ddf7cvtda4the">https://aws.amazon.com/marketplace/pp/prodview-ddf7cvtda4the</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="general">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#will-my-paid-account-auto-renew" aria-expanded="true"
                                        aria-controls="will-my-paid-account-auto-renew"> Will my paid account auto renew?
                                    </button>
                                </h2>
                            </div>
                            <div id="will-my-paid-account-auto-renew" class="collapse" aria-labelledby="general"
                                data-parent="#accordian-general">
                                <div class="card-body">
                                    <p dir="ltr">No, accounts do not auto renew. &nbsp;When your account is within 30
                                        days of expiring, you will have the option to renew.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="general">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#what-happens-if-i-dont-renew-my-plan" aria-expanded="true"
                                        aria-controls="what-happens-if-i-dont-renew-my-plan"> What happens if I don&#x27;t
                                        renew my plan? </button>
                                </h2>
                            </div>
                            <div id="what-happens-if-i-dont-renew-my-plan" class="collapse" aria-labelledby="general"
                                data-parent="#accordian-general">
                                <div class="card-body">
                                    <p dir="ltr">When your plan expires, you will have the option of downgrading.
                                        &nbsp;If you do nothing, your EDLs will be disabled after 1 week. &nbsp;Once you
                                        renew, your EDLs will be enabled.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="general">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#can-an-msp-or-mssp-use-their-account-for-their-customers"
                                        aria-expanded="true"
                                        aria-controls="can-an-msp-or-mssp-use-their-account-for-their-customers"> Can an MSP
                                        or MSSP use their account for their customers? </button>
                                </h2>
                            </div>
                            <div id="can-an-msp-or-mssp-use-their-account-for-their-customers" class="collapse"
                                aria-labelledby="general" data-parent="#accordian-general">
                                <div class="card-body">
                                    <p dir="ltr">No, EDLs in an account should only be consumed by equipment
                                        associated with the account owner.</p>
                                    <p dir="ltr">
                                        <br>
                                    </p>
                                    <p dir="ltr">If an MSP or MSSP wants to use their account to feed data to their
                                        customer's firewalls, they require a reseller plan. Please <a
                                            href="../contact/index.html" rel="noreferrer" target="_blank">contact us</a>
                                        for a quote. Quotes are based on number of customers. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <h2 id="edls-sources-templates">EDLs, Sources, Templates</h2>
                    <div class="accordion" id="accordian-edls-sources-templates">
                        <div class="card">
                            <div class="card-header" id="edls-sources-templates">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#what-is-an-edl" aria-expanded="true"
                                        aria-controls="what-is-an-edl"> What is an EDL? </button>
                                </h2>
                            </div>
                            <div id="what-is-an-edl" class="collapse" aria-labelledby="edls-sources-templates"
                                data-parent="#accordian-edls-sources-templates">
                                <div class="card-body">
                                    <p data-identifyelement="462" dir="ltr">An External Dynamic List(EDL) is a list
                                        of IP addresses, domains, or URLs. &nbsp;EDLs are hosted on a webserver.
                                        &nbsp;Firewalls import the data from the lists as objects and use them to enforce
                                        policy.</p>
                                    <p data-identifyelement="462" dir="ltr">
                                        <br>
                                    </p>
                                    <p data-identifyelement="463" dir="ltr">EDLs can be critical to a company's
                                        firewall policy. EDL Manager helps you manage and host your EDLs, so you don't have
                                        to worry about maintaining the software and infrastructure.</p>
                                    <p data-identifyelement="463" dir="ltr">
                                        <br>
                                    </p>
                                    <p data-identifyelement="466" dir="ltr">EDL Manager allows you to add Sources,
                                        then use that source data to create EDLs.&nbsp;</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="edls-sources-templates">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#is-edl-manager-compatible-with-my-firewall"
                                        aria-expanded="true" aria-controls="is-edl-manager-compatible-with-my-firewall">
                                        Is EDL Manager compatible with my firewall? </button>
                                </h2>
                            </div>
                            <div id="is-edl-manager-compatible-with-my-firewall" class="collapse"
                                aria-labelledby="edls-sources-templates" data-parent="#accordian-edls-sources-templates">
                                <div class="card-body">
                                    <p dir="ltr">Yes, EDL Manager is manufacturer&nbsp; agnostic. &nbsp;The output
                                        format is compatible with most enterprise firewalls.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="edls-sources-templates">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#what-is-a-source" aria-expanded="true"
                                        aria-controls="what-is-a-source"> What is a Source? </button>
                                </h2>
                            </div>
                            <div id="what-is-a-source" class="collapse" aria-labelledby="edls-sources-templates"
                                data-parent="#accordian-edls-sources-templates">
                                <div class="card-body">
                                    <p dir="ltr">EDLs are composed of data from Sources. &nbsp;A Source can be:</p>
                                    <ul>
                                        <li dir="ltr">A list of data published by a company or provider</li>
                                        <li dir="ltr">A JSON feed</li>
                                        <li dir="ltr">Manual list created by yourself</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="edls-sources-templates">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse"
                                        data-target="#do-you-support-authentication-when-requesting-a-source"
                                        aria-expanded="true"
                                        aria-controls="do-you-support-authentication-when-requesting-a-source"> Do you
                                        support authentication when requesting a source? </button>
                                </h2>
                            </div>
                            <div id="do-you-support-authentication-when-requesting-a-source" class="collapse"
                                aria-labelledby="edls-sources-templates" data-parent="#accordian-edls-sources-templates">
                                <div class="card-body">
                                    <p dir="ltr">Not yet but we're working on it.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="edls-sources-templates">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#do-you-support-stixtaxii-sources"
                                        aria-expanded="true" aria-controls="do-you-support-stixtaxii-sources"> Do you
                                        support STIX/TAXII sources? </button>
                                </h2>
                            </div>
                            <div id="do-you-support-stixtaxii-sources" class="collapse"
                                aria-labelledby="edls-sources-templates" data-parent="#accordian-edls-sources-templates">
                                <div class="card-body">
                                    <p dir="ltr">No, but it is under consideration</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="edls-sources-templates">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#what-is-a-source-template"
                                        aria-expanded="true" aria-controls="what-is-a-source-template"> What is a Source
                                        Template? </button>
                                </h2>
                            </div>
                            <div id="what-is-a-source-template" class="collapse" aria-labelledby="edls-sources-templates"
                                data-parent="#accordian-edls-sources-templates">
                                <div class="card-body">
                                    <p data-identifyelement="470" dir="ltr">We've created Source templates that you
                                        can add into your own source repository. &nbsp;Our source templates represent some
                                        of the most common sources used in creating EDLs. You can view our templates&nbsp;
                                        <a data-identifyelement="471" href="../sourcetemplates/index.html">here</a>. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="edls-sources-templates">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse"
                                        data-target="#i-have-a-feed-source-that-maintains-an-allow-list-what-are-the-ip-addresses-from-which-requests-will-be-made"
                                        aria-expanded="true"
                                        aria-controls="i-have-a-feed-source-that-maintains-an-allow-list-what-are-the-ip-addresses-from-which-requests-will-be-made">
                                        I have a feed source that maintains an allow list. What are the IP addresses from
                                        which requests will be made? </button>
                                </h2>
                            </div>
                            <div id="i-have-a-feed-source-that-maintains-an-allow-list-what-are-the-ip-addresses-from-which-requests-will-be-made"
                                class="collapse" aria-labelledby="edls-sources-templates"
                                data-parent="#accordian-edls-sources-templates">
                                <div class="card-body">
                                    <p dir="ltr">Here are the list of static IPs that source request will come from.
                                        &nbsp;If this list is updated, a notification will be emailed.</p>
                                    <ul>
                                        <li dir="ltr">159.203.149.14</li>
                                        <li dir="ltr">159.203.150.127</li>
                                        <li dir="ltr">159.203.150.190</li>
                                    </ul>
                                    <p dir="ltr">
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <h2 id="high-availability">High Availability</h2>
                    <div class="accordion" id="accordian-high-availability">
                        <div class="card">
                            <div class="card-header" id="high-availability">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#is-edl-manager-deployed-in-ha"
                                        aria-expanded="true" aria-controls="is-edl-manager-deployed-in-ha"> Is EDL Manager
                                        deployed in HA? </button>
                                </h2>
                            </div>
                            <div id="is-edl-manager-deployed-in-ha" class="collapse" aria-labelledby="high-availability"
                                data-parent="#accordian-high-availability">
                                <div class="card-body">
                                    <p dir="ltr">Yes, EDL Manager is deployed as a cluster of services. &nbsp;Multiple
                                        nodes behind load balancers are deployed so that in the event of failure or
                                        maintenance, the overall service will remain online. &nbsp;The different service
                                        nodes are:</p>
                                    <ul>
                                        <li dir="ltr">Website Nodes - Provide the web services and management</li>
                                        <li dir="ltr">Engine Nodes - Serve the EDL data</li>
                                    </ul>
                                    <p dir="ltr">The backend databases are setup as a cluster, with multiple nodes
                                        providing failover capabilities.</p>
                                    <p dir="ltr">You can monitor the uptime of all services at the EDL Manager status
                                        page, &nbsp; <a href="https://status.edlmanager.com/" rel="noopener noreferrer"
                                            target="_blank">status.edlmanager.com</a>. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="high-availability">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#where-is-the-application-hosted"
                                        aria-expanded="true" aria-controls="where-is-the-application-hosted"> Where is the
                                        application hosted? </button>
                                </h2>
                            </div>
                            <div id="where-is-the-application-hosted" class="collapse"
                                aria-labelledby="high-availability" data-parent="#accordian-high-availability">
                                <div class="card-body">
                                    <p dir="ltr">The EDL Manager application is cloud hosted. &nbsp;Currently, EDL
                                        Manager is hosted in the northeast United States. &nbsp;We monitor where our
                                        customers connect from and can/will deploy additional nodes around the world as
                                        necessary.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="high-availability">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse"
                                        data-target="#does-edl-manager-have-scheduled-maintenance-windows"
                                        aria-expanded="true"
                                        aria-controls="does-edl-manager-have-scheduled-maintenance-windows"> Does EDL
                                        Manager have scheduled maintenance windows? </button>
                                </h2>
                            </div>
                            <div id="does-edl-manager-have-scheduled-maintenance-windows" class="collapse"
                                aria-labelledby="high-availability" data-parent="#accordian-high-availability">
                                <div class="card-body">
                                    <p dir="ltr">We have weekly maintenance windows at <strong dir="ltr"
                                            style="box-sizing: border-box; font-weight: 600; color: rgb(103, 103, 103); font-family: proxima-nova, &quot;proxima nova&quot;, &quot;helvetica neue&quot;, helvetica, arial, sans-serif; font-size: 12.8px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;  text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">Saturday,
                                            7PM - 11PM <span class="user-timezone-label ember-view" dir="ltr"
                                                style="box-sizing: border-box;">(MDT)</span>
                                        </strong>
                                        <span class="user-timezone-label ember-view" dir="ltr"
                                            style="box-sizing: border-box;">. During these windows, we will be updating the
                                            application or our cloud provider will be performing maintenance on our
                                            instances. &nbsp;In most cases, the application does not go offline, as we
                                            upgrade one node at a time. &nbsp;</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <h2 id="security">Security</h2>
                    <div class="accordion" id="accordian-security">
                        <div class="card">
                            <div class="card-header" id="security">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#is-data-encrypted" aria-expanded="true"
                                        aria-controls="is-data-encrypted"> Is data encrypted? </button>
                                </h2>
                            </div>
                            <div id="is-data-encrypted" class="collapse" aria-labelledby="security"
                                data-parent="#accordian-security">
                                <div class="card-body">
                                    <p dir="ltr">All data is encrypted at rest with LUKS (Linux Unified Key Setup) and
                                        in transit with SSL. &nbsp;</p>
                                    <p dir="ltr">When configuring Advanced HTTP Request Options, usernames, passwords,
                                        HTTP headers, and HTTP body payloads are store encrypted.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="security">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#does-edl-manager-support-2fa"
                                        aria-expanded="true" aria-controls="does-edl-manager-support-2fa"> Does EDL
                                        Manager support 2FA? </button>
                                </h2>
                            </div>
                            <div id="does-edl-manager-support-2fa" class="collapse" aria-labelledby="security"
                                data-parent="#accordian-security">
                                <div class="card-body">
                                    <p dir="ltr">Paid accounts do support 2FA, using Google Authenticator or another
                                        compatible app for TOTP passwords.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="security">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#can-i-see-audit-logs" aria-expanded="true"
                                        aria-controls="can-i-see-audit-logs"> Can I see audit logs? </button>
                                </h2>
                            </div>
                            <div id="can-i-see-audit-logs" class="collapse" aria-labelledby="security"
                                data-parent="#accordian-security">
                                <div class="card-body">
                                    <p dir="ltr">Paid accounts have the capability to view the following logs:</p>
                                    <ul>
                                        <li dir="ltr">Configuration Audit logs - View any changes of EDLs or Sources
                                        </li>
                                        <li dir="ltr">Authentication Logs - View login, and logout, and failed logins.
                                        </li>
                                    </ul>
                                    <p dir="ltr">Logs are available for 90 days.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
