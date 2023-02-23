@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('policy-legal.index') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('policy-legal.index') }}" />
@endsection

@push('css')
@endpush

@push('js')
@endpush

<x-hanging-gardens-of-bali>
    <!-- Content -->
    <section class="header-image">
        <img src="{{ asset('storage/' . $setting->banner_image) }}" class="w-100 vh-100" alt="{{ $setting->meta_title }}">
    </section>

    <section class="description">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <h1 class="underline fw-bold text-uppercase text-center">Policy &amp; Legal</h1>
                    <p class="mt-4">
                    <p><b>LEGAL NOTICES</b></p>
                    <p>HANGING GARDENS OF BALI WEBSITE TERMS OF USE</p>
                    <p>THIS IS A BINDING LEGAL AGREEMENT (this “Agreement”).</p>
                    <p>PLEASE READ THIS AGREEMENT BEFORE USING THIS SITE. LAST UPDATED 27/06/17.</p>
                    <ul>
                        <li>This Agreement governs your use of this Internet site located at hanginggardensofbali.com, including all webpages, applications, “Contents” (as defined below), and goods, services, features and functions provided or offered on or through this site (collectively, the “Site”) and is by and between Hanging Gardens of Bali (collectively “Hanging Gardens of Bali” “we”, “us” or “our”) and you, whether you are accessing the Site on your own, through an intermediary, or on behalf of any other person or entity (“you”). By viewing, accessing, posting on, interacting or communicating with, engaging in transactions of any kind on or through (including but not limited to making reservations), and/or in any other manner utilizing this Site, you hereby agree to the terms set forth herein, and in Hanging Gardens of Bali’s Privacy Policy at https://www.hanginggardensofbali.com/privacy. By Using the Application, in addition to the foregoing terms, you agree to the terms and conditions governing use of the Application as set forth in the “Application License Agreement.”</li>
                    </ul>
                    <p>We reserve the right, in our sole discretion, to modify, add, or remove portions of the terms of this Agreement at any time without notice. Unless otherwise indicated, such changes will become effective immediately upon our posting of the changes.</p>
                    <p>Please note that additional terms and conditions may apply to making reservations and/or check in and/or check out arrangements, and/or engaging in purchases and/or other transactions or activities on or through this Site or the Application. You agree to comply with the terms and conditions set forth herein and any and all such applicable additional terms and conditions.</p>
                    <p>We reserve the right in our sole discretion to revoke or deny your access to the Site and/or the Application, including, without limitation, if you violate any provision of this Agreement.</p>
                    <p><b>RESTRICTIONS ON USE OF SITE AND CONTENT</b></p>
                    <p>Except as set forth below with respect to “Communications” (as defined below): (i) all rights in the information, data, text, software, music, photographs, pictures, designs, graphics, logos, files, products, services, images, videos, messages, sounds, files, and other materials contained and/or displayed on the Site, the layout and design of the Site, and the selection and arrangement of material on the Site are owned or licensed by Hanging Gardens of Bali (hereinafter the “Content”); and (ii) you may not modify, alter, download, upload, post, reproduce, distribute, publish, transmit, copy, display, transfer, sell, re-sell, perform, license or sublicense the Content or use the Content to create derivative works in any form, manner or by any means, for any commercial purpose without the prior written permission of Hanging Gardens of Bali.</p>
                    <p>Subject to your compliance with the terms of this Agreement, we grant you a limited, non-exclusive, non-transferable license to access and use the Content solely in connection with your permitted use of the Site and solely for your personal and for non-commercial purposes.</p>
                    <ul>
                        <li>This Site displays or references valuable trademarks owned by Hanging Gardens (including but not limited to the “HANGING GARDENS OF BALI” mark, and the logo) used by Hanging Gardens of Bali to distinguish its services and wares (collectively, the “Marks”). The Marks and related proprietary property are protected from copying and simulation under national and international laws, and you may not reproduce, download, upload, copy or otherwise use the Marks in any manner without the express prior written permission of Hanging Gardens of Bali.&nbsp; Many of the Marks, including <b>Hanging Gardens of Bali®</b>, <b>Hanging Gardens®</b> AND <b>Hanging Gardens Group®</b>, and the logo Mark – are registered in the International Patent and Trademark Offices and/or in other trademark offices and agencies throughout the world. Other trademarks not owned by Hanging Gardens of Bali and referenced on this Site are the property of their respective owners.</li>
                    </ul>
                    <p>The Site may contain or reference the Marks, and/or other trademarks, service marks, trade names, patents, copyrighted materials, trade secrets, technologies, products, processes or other proprietary rights (collectively the “IP”) owned by Hanging Gardens and/or other parties. No license to or right in any such IP is granted to or conferred upon you and you may not use the IP for any purpose (including those identified in the restrictions provisions set forth below), except as otherwise permitted herein or as permitted by law.</p>
                    <p>In addition to the foregoing restrictions, you further agree that in connection with your Use of the Site, you will not in any manner:</p>
                    <ul>
                        <li>Use any devices or mechanisms, including but not limited to software, routines, malicious or unauthorized code, engines, tools, agents, robots, spiders, crawlers, data mining tools, viruses, worms, Trojan horses, malware, programs.</li>
                        <li>Provide or send us any information or data that includes any Devices;</li>
                        <li>Engage in any conduct that creates or is intended to create liability for Hanging Gardens;</li>
                        <li>Decipher, decompile, disassemble or reverse engineer any of the software used in connection with the Site; violate the restrictions in any robot exclusion headers on the Site or otherwise bypass, breach or circumvent any security or authentication measures and/or other measures employed to prevent or limit access to the Site; send any unsolicited or unauthorized advertising, promotional materials, email, junk mail, spam, chain letters or other form of solicitation; forge any TCP/IP packet header or any part of the header information in any email or newsgroup posting, or otherwise use or send altered, deceptive or false source-identifying information; impersonate or misrepresent your affiliation with any person or entity;</li>
                        <li>Engage in any conduct that: (i) infringes, misappropriates or violates any other party’s patent, copyright, trademark, trade secret, moral rights or other intellectual property rights, or rights of publicity or privacy; (ii) is fraudulent, false, misleading or deceptive; (iii) is defamatory, obscene, pornographic, vulgar or offensive; (iv) promotes discrimination, bigotry, racism, hatred, harassment or harm against any individual or group; (v) is violent or threatening or promotes violence or actions that are threatening to any person or entity; (vi) promotes illegal or harmful activities or substances; (vii) otherwise violates, or encourages any conduct that would violate, any applicable law, statute, ordinance, rule or regulation or that would give rise to civil liability;</li>
                        <li>Encourage or enable any other individual to do any of the foregoing.</li>
                    </ul>
                    <p>Additional restrictions on the Use of this Site are set forth in other provisions of this Agreement.</p>
                    <p><b>RESERVATIONS/RENTALS AT HANGING GARDENS OF BALI</b></p>
                    <p>You shall make only legitimate reservations in good faith for use only by you and/or your invited guests and/or others on whose behalf you are authorized to act, and not for other purposes, including without limitation, reselling, impermissibly assigning or posting on third party websites, or making speculative, false or fraudulent reservations, or any reservations in anticipation of demand. We reserve the right to cancel or modify reservations in our sole discretion for any reasons, including where it appears that a customer has engaged in fraudulent or inappropriate activity or under other circumstances where it appears that the reservations contain or resulted from a mistake or error, even if such mistake or error is ours. To contest the cancellation of a booking or freezing or closure of an account, please contact our Customer Support.</p>
                    <p><b>THIRD PARTY SITES AND MATERIALS</b></p>
                    <p>This Site contains links to websites and resources operated by parties other than us, who may provide goods and/or services and whose websites may link to our Site (hereinafter “Third Party Sites”). Such links are provided for your convenience only. We do not control such Third Party Sites and are not responsible for their content or accuracy. We make no warranties regarding and are not liable or responsible for them, for links displayed on such websites or for any third party materials, products, or services that you purchased, rent, lease or otherwise acquire from such Third Party Sites. The inclusion on the Site of links to Third Party Sites does not imply any endorsement or accuracy of the material on such websites or any association with their operators. You acknowledge sole responsibility for and assume all risk arising from your use of any Third Party Sites.</p>
                    <p><b>HANGING GARDENS OF BALI’S RIGHT TO MAKE CHANGES</b></p>
                    <p>Hanging Gardens of Bali reserves the right to make changes, corrections, cancellations and/or improvements to the Site and Content, and the products, services and programs described therein at any time without notice, including after confirmation of a transaction.</p>
                    <p><b>DISCLAIMER AND LIMITATION OF LIABILITY AND WAIVER</b></p>
                    <p>Your Use of the Site and the Application is at your own risk. The Site and the Application are provided “as is” and on an “as available” basis without representations or warranties of any kind, either express, implied or statutory. To the maximum extent permissible pursuant to applicable law, on behalf of the Indemnified Parties, we expressly disclaim all warranties, express or implied, including, but not limited to, implied warranties of merchantability, fitness for a particular purpose, title, non-infringement, design, accuracy, capability, sufficiency, suitability, capacity, completeness, availability or compatibility, or arising from course of dealing or course of performance.</p>
                    <p><b>ELECTRONIC COMMUNICATIONS PRIVACY</b></p>
                    <p>We make no guaranty of confidentiality or privacy of any Communications or information transmitted on the Site or any website linked to the Site. We will not be liable for the privacy of Communications and/or any other information, e-mail addresses, registration and identification information, disk space, confidential or trade-secret information, or any other content transmitted over networks accessed by the Site, or otherwise connected with your use of the Site.</p>
                    <p><b>TERMS &amp; CONDITIONS:</b></p>
                    <ul>
                        <li>Rate quoted is for 2 guests per villa / per night.</li>
                        <li>Full prepayment is required at time of booking.</li>
                        <li>Booking is non-amendable and non-refundable.</li>
                        <li>In the event of no-show (i.e should you neither use or cancel your reservation), a fee equivalent to your entire stay will be charged.</li>
                        <li>All fees and penalty are inclusive of service charge and government tax.</li>
                    </ul>
                    <p><br></p>
                    <p>CONTACT INFORMATION</p>
                    <p>If you have any questions about this Agreement please contact us at:<br>
                        Hanging Gardens Of Bali<br>
                        Desa Buahan Payangan, Gianyar, Bali 80571, Indonesia<br>
                        Tel. +62 361 982700 Fax. +62 361 982800<br>
                        E. <a href="mailto:reservations@hanginggardensofbali.com" target="_blank">reservations@hanginggardensofbali.com</a><br>
                        W. <a href="https://hanginggardensofbali.com" target="_blank">www.hanginggardensofbali.com</a>
                    </p>
                    <p><br></p>
                    <p>Copyright &copy; 2005-2023 Hanging Gardens. All rights reserved.ept as otherwise provided herein, if any provision of this Agreement is found by a court to be unlawful, void, or for any reason unenforceable, then that provision shall be deemed severable from this Agreement and shall not affect the validity and enforceability of any remaining provisions.</p>
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-hanging-gardens-of-bali>