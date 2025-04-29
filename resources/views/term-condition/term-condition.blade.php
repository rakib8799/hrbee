@extends('app')
@section('content')
<!--begin::Wrapper-->
<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
style="background-image: url(/media/svg/illustrations/landing.svg)">
<!--begin::Header-->
@include('layouts.header.header')
<!--end::Header-->
</div>

<!--begin::Body-->
<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
    <!--begin::Wrapper-->
    <div class="bg-body d-flex flex-column flex-center rounded-4 p-10">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column align-items-stretch h-lg-100">
            <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
                <!--begin::Terms and Conditions-->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <!-- Introduction -->
                        <div>
                            <h1 class="card-title">Terms and Conditions</h1>
                            <p>Welcome to Nonditosoft!</p>
                            <p>These terms and conditions outline the rules and regulations for the use of Nonditosoft's Website, located at <a href="https://nonditosoft.com">https://nonditosoft.com</a>.</p>
                            <p>By accessing this website we assume you accept these terms and conditions. Do not continue to use Nonditosoft if you do not agree to take all of the terms and conditions stated on this page.</p>
                            <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Bangladesh. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>
                        </div>

                        <!-- Cookies -->
                        <div class="mt-5">
                            <h4>1. Cookies</h4>
                            <p>We employ the use of cookies. By accessing Nonditosoft, you agreed to use cookies in agreement with the Nonditosoft's Privacy Policy.</p>
                            <p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>
                        </div>

                        <!-- License -->
                        <div class="mt-5">
                            <h4>2. License</h4>
                            <p>Unless otherwise stated, Nonditosoft and/or its licensors own the intellectual property rights for all material on Nonditosoft. All intellectual property rights are reserved. You may access this from Nonditosoft for your own personal use subjected to restrictions set in these terms and conditions.</p>
                            <p>You must not:</p>
                            <ul>
                                <li>Republish material from Nonditosoft.</li>
                                <li>Sell, rent or sub-license material from Nonditosoft.</li>
                                <li>Reproduce, duplicate or copy material from Nonditosoft.</li>
                                <li>Redistribute content from Nonditosoft.</li>
                            </ul>
                            <p>This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the help of the Free Terms and Conditions Generator.</p>
                        </div>

                        <!-- Hyperlinking to our Content -->
                        <div class="mt-5">
                            <h4>3. Hyperlinking to our Content</h4>
                            <p>The following organizations may link to our Website without prior written approval:</p>
                            <ul>
                                <li>Government agencies;</li>
                                <li>Search engines;</li>
                                <li>News organizations;</li>
                                <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
                                <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
                            </ul>
                            <p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>
                        </div>

                        <!-- iFrames -->
                        <div class="mt-5">
                            <h4>4. iFrames</h4>
                            <p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>
                        </div>

                        <!-- Content Liability -->
                        <div class="mt-5">
                            <h4>5. Content Liability</h4>
                            <p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>
                        </div>

                        <!-- Your Privacy -->
                        <div class="mt-5">
                            <h4>6. Your Privacy</h4>
                            <a href='{{ route('privacy-policy.index') }}'>Please read Privacy Policy.</a>
                        </div>

                        <!-- Reservation of Rights -->
                        <div class="mt-5">
                            <h4>7. Reservation of Rights</h4>
                            <p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amend these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>
                        </div>

                        <!-- Removal of links from our website -->
                        <div class="mt-5">
                            <h4>8. Removal of links from our website</h4>
                            <p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly. We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>
                        </div>

                        <!-- Return & Refund Policy -->
                        <div class="mt-5">
                            <h4>9. Return & Refund Policy</h4>
                            <p>Nonditosoft is working as a service provider. So Nonditosoft doesn’t have anything to return or refund. It is a non-return & non-refundable product and service.</p>
                        </div>

                        <!--  Disclaimer -->
                        <div class="mt-5">
                            <h4>10. Disclaimer</h4>
                            <p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>
                            <ul>
                                <li>limit or exclude our or your liability for death or personal injury.</li>
                                <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation.</li>
                                <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
                                <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
                            </ul>
                            <p>The limitations and prohibitions of liability set in this  elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty. As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>
                        </div>    
                    </div>
                </div>
                <!--end::Terms and Conditions-->
            </div>
        </div>
        <!--end::Content-->
    </div>
</div>
<!--end::Body-->
@endsection