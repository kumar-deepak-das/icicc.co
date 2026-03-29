<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.head')
</head>

<body>

    @include('inc.spinner')

    @include('inc.nav-bar-top')

    @include('inc.nav-bar-sm')

    @include('inc.content-top')

    @include('inc.nav-bar-lg')

    @include('inc.marquee')

    <!-- Header Start -->
    <!-- <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Terms and Contitions</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">Terms and Contitions</li>
            </ol>    
        </div>
    </div> -->
    <!-- Header End -->


    <!-- Gallery Start -->
    <div class="container-fluid training overflow-hidden bg-light py-5">
        <div class="container py-5">

            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{!!env('CONF_NAME')!!}</h5>
                </div>
                <h2 class="display-7 mb-4">Terms and Contitions</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <p>The Terms & Conditions between NewGen Research Consultancy and any of the entities completing a booking request during joining to any of our international conferences. The following Terms & Conditions are applicable to all our conference events and therein submission, registration and participation pertaining to the same. Acknowledging the Terms & Conditions signifies the acceptance of all the Terms & Conditions mentioned underneath:</p>

                    <ul>
                        <li>The international event or conference is organized and managed by the firm NewGen Research Consultancy. References to “us” means NewGen Research Consultancy and references to “we” “us” and “our” shall be construed accordingly.</li>
                        <li>You acknowledge and accept that we have the right to publicly announce our business relationship with you which shall include but not be limited to announcements on social media. Such announcements shall not be disparaging or otherwise adverse to your business.</li>
                        <li>All applications to register for the conference, and all orders to purchase the relevant documentation pack, are made subject to these Terms & Conditions (which shall apply to the exclusion of any terms imposed by you).</li>
                        <li>We solely have the rights to make any necessary changes regarding the venue, timings, speakers and programme schedule of our conferences due to unavoidable circumstances which are not in our control. Due to the postponement or the dates being changed, we are not liable for any expenditure, damage or loss incurred by you.</li>
                        <li>The postponement/cancellation/ any changes in the conference/event will be updated on the website and will be notified from time to time through e-mails.</li>
                        <li>We are committed to provide a safe, sociable, productive and welcoming environment where everyone can participate without any discrimination, harassment or violence of any kind. You are required to treat everyone equally with respect and consideration. Disapproval of any of the requests mentioned above will lead to serious action and your removal from the appropriate premises, if necessary. Registration for any of the conference/event will be considered as an agreement to follow the code of conduct.</li>
                        <li>You can report any behavior inconsistent with the above principles to onsite venue staff. Further necessary actions will be taken and complete safety, escorts will be provided to feel safe for the duration of the event.</li>
                        <li>We prohibit discrimination and harassment of anyone including attendee/delegate, speaker, volunteer, exhibitor, staff member, service provider, organizer, or meeting guest and will not be tolerated and accepted. Unacceptable behavior includes (but is not limited to) unwanted verbal attention, unwanted touching, intimidation, stalking, shaming, or bullying.</li>
                        <li>Discrimination on the basis of gender or gender identity, sexual orientation, age, disability, physical appearance, race, religion, national origin, or ethnicity are also treated as an act of misconduct.</li>
                        <li>If you require images related to the event, we will provide the same on request sent to us.</li>
                        <li>We impose certain restrictions on the use of any images, audio, video, recording of our events for any purposes which include social media marketing, advertising, promotional purposes etc.</li>
                        <li>By attending the event you acknowledge and agree to the filming and photography policies laid down by us. The policies framed are as follows:</li>

                        <ul>
                            <li>We may use the photographs, videos and audio recordings in any event related activities, promotions, advertisement and social media in both electronic and print format for event purpose only.</li>
                            <li>Due to the excessive use of smart phones in today’s world, we disclaim all liability for the capture of your image/ video in any multimedia format by other participants in the event.</li>
                            <li>Anyone who do not agree to the policies framed and not wish to be filmed or captured in any event can write to us through mail prior to attending the event.</li>
                        </ul>
                        <li>The information supplied by you after the registration will be kept as a record and we are committed to data privacy will protect your personal information, wherever necessary.</li>
                            <li>By submitting the email address at the time of registration it is assumed that you agree to the policy and have no objection if regular updates are sent at the time of every conference/event held by us.</li>
                            <li>We may also share the personal information provided by you to our third-party service providers engaged in the conference held and to our co– sponsors for event purpose only.</li>
                            <li>Except to the disclosure of the information to the above concerned parties, we will not disclose your personal information to any other third party without your consent.</li>
                            <li>If you do not wish to get contacted in the future for event purposes write to us via email to unsubscribe this service provided by us.</li>
                            <li>The comments provided by the reviewer are individual and independent views of their own area of knowledge and expertise. Any negative comments received are not considered as an act of offense.</li>
                            <li>The views / comments expressed by the reviewer are not with the intention to discourage or disrespect the work of the author. It is just feedback to the work/study presented and should be taken in a positive manner in due course for improvement and value addition of existing research work.</li>
                            <li>The information of the reviewer body is highly considered to be confidential and cannot be disclosed at any point of time even if claimed or requested.</li>
                            <li>We do not claim or guarantee that any papers will be published by any specific publisher or indexed. Publishers or organizations can decline to publish the conference paper that does not meet their quality standards. Indexing services evaluate conference papers and independently determine what they will index. The procedures for the same are dynamic and are liable to change from time-to-time.</li>
                            <li>The publication time for the papers received is not fixed. It may take up to 6-9 months from the date of completion of the conference or even more for further processing. The same can also be extended due to unavoidable circumstances or as per the publisher requirements or delayed response by authors to publishers’ queries.</li>
                            <li>It is the sole responsibility of the participants to take care of his/her visa requirements. Attendees who require an entry visa must allow sufficient time for the application procedure. Attendees should also contact the nearest embassy or consulate to determine the appropriate timing of their visa applications.</li>
                            <li>If you fail to procure a visa after registration and therein fail to attend the event, we are not responsible for the situation and do not offer a refund in such circumstances. Although, what best could be offered is that you may be permitted to join the event virtually through online mode and attend the conference and make presentations, etc.</li>
                            <li>Registration process is limited to participants who are age 18 or above and assume that we are not responsible for any loss, damage, expenses, personal injury, including loss of life, illness, disability, property damage or property theft or actions of any kind you may hereafter suffer or sustain before, after or during the event, unless or until it has incurred due to the negligence by us.</li>
                            <li>The contact details and personal information of speakers agreed to be a part of our conference may be shared with event attendees. We may also post the information containing name, affiliation, email address etc. with a photograph on our various conference websites for visitor’s knowledge attending a particular conference.</li>
                            <li>Participants are also informed that the views and comments expressed by the speakers in the conference are their own and to their expertise. Hence, we do not accept any liability for the advice or views expressed by any speaker at the conference.</li>
                            <li>We prohibit the creation of frames around all the web pages which alters and affects the visual presentation of any of our websites.</li>
                            <li>These terms and conditions are governed by Indian Law. We reserve the right to change, revise, add or remove any of the above terms and conditions without any prior notice. If any one or more terms & conditions are revised or removed, it is considered that the rest of conditions are valid and applicable to all the participants of the events including speakers, sponsors and exhibitors.</li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->
    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>