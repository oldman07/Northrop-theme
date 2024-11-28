<?php
/*
 * Template Name: What we do
 */
?>

<?php get_header(); ?>

<main id="app" class="">
    <h1 class="sr-only">Outsourced Accounting</h1>
    <div class="bg-image-container bg-dark bg-black text-white py-12 md:py-32">
        <div class="bg-image"
            style="background-image: url(&#39;https://res.cloudinary.com/rootworks/image/upload/ar_3:1,c_fill,f_auto,g_face,w_1800/v1/web_assets/what-we-do_jbevmd&#39;);">
        </div>

        <div class="mx-auto max-width">
            <div class="text-center mx-auto">
                <h2 class="h1 hero-title ">Offering a robust line of products <span class="sub-title">to meet your
                        personal and business needs</span></h2>

            </div>
        </div>
    </div>
    <div class="max-width mx-auto my-8 lg:my-20">
        <div class="flex flex-wrap">

            <div class="w-full lg:w-1/4">
                <div class="mb-6 relative" x-data="{ showSectionNav: false }">
                    <h2 class="sr-only">Select a product</h2>
                    <button class="section-nav-toggle lg:hidden" :class="{ &#39;open&#39;: showSectionNav }"
                        x-on:click="showSectionNav = !showSectionNav">
                        <span>Select a product</span>
                        <svg class="svg-icon -mt-1" aria-hidden="true" focusable="false">
                            <use xlink:href="/assets/icons.svg#icon--angle-down"></use>
                        </svg> </button>
                    <nav id="nav-section" aria-label="Section"
                        :class="{ &#39;open&#39;: showSectionNav, &#39;block&#39;: showSectionNav, &#39;hidden&#39;: !showSectionNav }"
                        class="section-nav lg:block hidden">
                        <ul class="tier-1-list">
                            <li class="tier-1-li parent">
                                <a href="https://www.northropfinancialgroup.com/what-we-do/outsourced-accounting"
                                    class="tier-1-item text-gray block py-2 px-2 uppercase font-extrabold my-1 border-l-4 bg-white border-primary active">Outsourced
                                    Accounting</a>

                                <ul class="tier-2-list">
                                    <li class="tier-2-li parent leading-snug mb-1">
                                        <a href="https://www.northropfinancialgroup.com/what-we-do/accounting"
                                            class="tier-2-item text-gray block py-2 px-3 border-l-4 border-transparent hover:bg-white ">Accounting</a>

                                        <ul class="tier-3-list">
                                        </ul>
                                    </li>
                                    <li class="tier-2-li parent leading-snug mb-1">
                                        <a href="https://www.northropfinancialgroup.com/what-we-do/payroll"
                                            class="tier-2-item text-gray block py-2 px-3 border-l-4 border-transparent hover:bg-white ">Payroll</a>

                                        <ul class="tier-3-list">
                                        </ul>
                                    </li>
                                    <li class="tier-2-li parent leading-snug mb-1">
                                        <a href="https://www.northropfinancialgroup.com/what-we-do/tax"
                                            class="tier-2-item text-gray block py-2 px-3 border-l-4 border-transparent hover:bg-white ">Tax</a>

                                        <ul class="tier-3-list">
                                        </ul>
                                    </li>
                                    <li class="tier-2-li parent leading-snug mb-1">
                                        <a href="https://www.northropfinancialgroup.com/what-we-do/audit-protection"
                                            class="tier-2-item text-gray block py-2 px-3 border-l-4 border-transparent hover:bg-white ">Audit
                                            Protection</a>

                                        <ul class="tier-3-list">
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="tier-1-li parent">
                                <a href="https://www.northropfinancialgroup.com/what-we-do/personal-income-tax"
                                    class="tier-1-item text-gray block py-2 px-2 uppercase font-extrabold my-1 border-l-4 border-transparent hover:bg-white ">Personal
                                    Income Tax</a>

                                <ul class="tier-2-list">
                                </ul>
                            </li>
                            <li class="tier-1-li parent">
                                <a href="https://www.northropfinancialgroup.com/what-we-do/business-foundation-services"
                                    class="tier-1-item text-gray block py-2 px-2 uppercase font-extrabold my-1 border-l-4 border-transparent hover:bg-white ">Business
                                    Foundation Services</a>

                                <ul class="tier-2-list">
                                    <li class="tier-2-li parent leading-snug mb-1">
                                        <a href="https://www.northropfinancialgroup.com/what-we-do/entity-type-analysis"
                                            class="tier-2-item text-gray block py-2 px-3 border-l-4 border-transparent hover:bg-white ">Entity
                                            Type Analysis</a>

                                        <ul class="tier-3-list">
                                        </ul>
                                    </li>
                                    <li class="tier-2-li parent leading-snug mb-1">
                                        <a href="https://www.northropfinancialgroup.com/what-we-do/accounting-system-setup"
                                            class="tier-2-item text-gray block py-2 px-3 border-l-4 border-transparent hover:bg-white ">Accounting
                                            System Setup</a>

                                        <ul class="tier-3-list">
                                        </ul>
                                    </li>
                                    <li class="tier-2-li parent leading-snug mb-1">
                                        <a href="https://www.northropfinancialgroup.com/what-we-do/retirement-plan-analysis"
                                            class="tier-2-item text-gray block py-2 px-3 border-l-4 border-transparent hover:bg-white ">Retirement
                                            Plan Analysis</a>

                                        <ul class="tier-3-list">
                                        </ul>
                                    </li>
                                    <li class="tier-2-li parent leading-snug mb-1">
                                        <a href="https://www.northropfinancialgroup.com/what-we-do/credit-card-rewards"
                                            class="tier-2-item text-gray block py-2 px-3 border-l-4 border-transparent hover:bg-white ">Credit
                                            Card Rewards</a>

                                        <ul class="tier-3-list">
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="tier-1-li parent">
                                <a href="https://www.northropfinancialgroup.com/what-we-do/business-management-services"
                                    class="tier-1-item text-gray block py-2 px-2 uppercase font-extrabold my-1 border-l-4 border-transparent hover:bg-white ">Business
                                    Management Services</a>

                                <ul class="tier-2-list">
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="flex-1 lg:w-3/4 lg:pl-24 entry-detail product-detail mb-12 prose">

                <h2 class="heading">It’s like having your own accounting department</h2>





                <p>When you outsource your accounting work to us, it’s like having a trusted advisor on staff. Our team
                    handles all of your day-to-day accounting tasks so you can focus on what’s important—running your
                    business.&nbsp;</p>
                <p>We work collaboratively with you via our advanced, secure website platform to support a streamlined
                    and highly efficient workflow. And because work is performed online, you always have real-time views
                    of your data and financial situation. Best of all, we bundle services for a fixed monthly
                    fee—allowing you to budget effectively and never get an unpleasant billing surprise.</p>






                <div class="product-detail product-section mt-12">


                    <h3 class="mb-8 h4 text-center">Choose the solution that is right for your business:</h3>


                    <div class="columns cards">
                        <div data-label="" class="mb-4 md:mb-8 type-listCard card max-w-lg">
                            <div class="inner">

                                <img src="./Outsourced Accounting _ Northrop Financial Group_files/oa-basic-logo-darker_w7eihm"
                                    alt="Outsourced Accounting Basic" class="mx-auto ">

                                <div data-label="Item List" class="type-itemList checkmarks checkmarks">
                                    <p class="mb-3 -mx-4 px-4 text-sm">Includes:</p>

                                    <h2 class="h5 mt-0">Account reconciliation</h2>


                                    <ul class="mb-4 checkmarks">
                                        <li>
                                            Reconcile bank accounts
                                        </li>
                                        <li>
                                            Reconcile electronic transactions into QuickBooks®
                                        </li>
                                        <li>
                                            Reconcile credit card accounts
                                        </li>
                                    </ul>
                                </div>
                                <div data-label="Item List" class="type-itemList checkmarks checkmarks">

                                    <h2 class="h5 mt-0">Advice</h2>


                                    <ul class="mb-4 checkmarks">
                                        <li>
                                            Prepare monthly financial statements
                                        </li>
                                        <li>
                                            Prepare monthly budget reports
                                        </li>
                                        <li>
                                            Tax planning
                                        </li>
                                        <li>
                                            General business consulting
                                        </li>
                                    </ul>
                                </div>
                                <div data-label="Item List" class="type-itemList checkmarks">

                                    <h2 class="h5 mt-0">Tax</h2>


                                    <ul class="mb-4 ">
                                        <li>
                                            Tax preparation
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div data-label="Standard" class="mb-4 md:mb-8 type-listCard card max-w-lg">
                            <div class="inner">

                                <img src="./Outsourced Accounting _ Northrop Financial Group_files/oa-standard-logo-darker_uxe23a"
                                    alt="Outsourced Accounting Standard" class="mx-auto ">

                                <div data-label="Item List" class="type-itemList checkmarks checkmarks">
                                    <p class="mb-3 -mx-4 px-4 text-sm">Includes <strong>Basic</strong> plus:</p>

                                    <h2 class="h5 mt-0">Payroll</h2>


                                    <ul class="mb-4 checkmarks">
                                        <li>
                                            Prepare payroll
                                        </li>
                                        <li>
                                            Submit payroll taxes to agencies
                                        </li>
                                        <li>
                                            Prepare payroll tax returns
                                        </li>
                                        <li>
                                            Provide employee access to electronic paystubs
                                        </li>
                                        <li>
                                            Provide employer access to electronic pay records
                                        </li>
                                        <li>
                                            Prepare W-2s
                                        </li>
                                        <li>
                                            Pension remittance
                                        </li>
                                        <li>
                                            Garnishment remittance
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div data-label="BOSS Complete" class="mb-4 md:mb-8 type-listCard card max-w-lg">
                            <div class="inner">

                                <img src="./Outsourced Accounting _ Northrop Financial Group_files/oa-complete-logo-darker_v5z1sw"
                                    alt="Outsourced Accounting Complete" class="mx-auto ">

                                <div data-label="Item List" class="type-itemList checkmarks checkmarks">
                                    <p class="mb-3 -mx-4 px-4 text-sm">Includes <strong>Standard</strong> plus:</p>

                                    <h2 class="h5 mt-0">Bookkeeping</h2>


                                    <ul class="mb-4 checkmarks">
                                        <li>
                                            Process bills and payments
                                        </li>
                                        <li>
                                            Track credit card expenses and receipts
                                        </li>
                                        <li>
                                            Process employee expense reports
                                        </li>
                                        <li>
                                            Prepare 1099s for contractors
                                        </li>
                                        <li>
                                            Provide digital access to paid bills
                                        </li>
                                        <li>
                                            Quarterly video conference to review key performance measures
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



            </div>





        </div>
    </div>
</main>


<?php get_footer(); ?>