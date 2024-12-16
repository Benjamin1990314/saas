<x-layouts.simple>

    <x-slot name="title">
        {{ __('Privacy Policy') }}
    </x-slot>

    <x-heading.h1 class="md:!text-4xl !text-4xl pt-4 pb-6">
        {{ __('Privacy Policy') }}
    </x-heading.h1>

    <p class="mb-6">
        {{ config('app.name', 'SaaSykit') }} (“us”, “we”, or “our”) operates the {{ config('app.url', '') }} website (the “Service”).
        This page informs you of our policies regarding the collection, use, and disclosure of personal data when you use our Service and the choices you have associated with that data.
    </p>

    <p class="mb-6">
        We will not use or share your information with anyone except as described in this Privacy Policy.
    </p>

    <p class="mb-6">
            We use your data to provide and improve the Service. By using the Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, accessible at <a href="{{route('terms-of-service')}}">terms of service</a>.
    </p>

    <x-heading.h2 class="text-xl mb-2">
            Definitions:
    </x-heading.h2>
    <p class="mb-6">
            Personal Data means data about a living individual who can be identified from those data (or from those and other information either in our possession or likely to come into our possession).
    </p>
    <p class="mb-6">
            Usage Data is data collected automatically either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).
            Cookies are small pieces of data stored on a User’s device.
    </p>
    <p class="mb-6">
            Data Controller means a person who (either alone or jointly or in common with other persons) determines the purposes for which and the manner in which any personal data are, or are to be, processed.
    </p>
    <p class="mb-6">
            For the purpose of this Privacy Policy, we are a Data Controller of your data.
    </p>
    <p class="mb-6">
            Data Processor (or Service Provider) means any person (other than an employee of the Data Controller) who processes the data on behalf of the Data Controller.
    </p>
    <p class="mb-6">
            We may use the services of various Service Providers in order to process your data more effectively.

            Data Subject is any living individual who is the subject of Personal Data.
    </p>
    <p class="mb-6">
            The User is the individual using our Service. The User corresponds to the Data Subject, who is the subject of Personal Data.
    </p>
    <x-heading.h2 class="text-xl mb-2">
            Information Collection And Use
    </x-heading.h2>
    <p class="mb-6">
            We collect several different types of information for various purposes to provide and improve our Service to you.
    </p>
    <x-heading.h2 class="text-xl mb-2">
            Personal data
    </x-heading.h2>
    <p class="mb-6">
            While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you (“Personal Data”). Personally identifiable information may include, but is not limited to: email address, first and last name, cookies and usage data.
    </p>
    <p class="mb-6">
            We may use your Personal Data to contact you with newsletters, marketing or promotional materials and other information that may be of interest to you. You may opt out of receiving any, or all, of these communications from us by following the unsubscribe link or instructions provided in any email we send.
    </p>
    <x-heading.h2 class="text-xl mb-2">
            Usage Data
    </x-heading.h2>
    <p class="mb-6">
            We may also collect information how the Service is accessed and used (“Usage Data”). This Usage Data may include information such as your computer’s Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.
    </p>

    <x-heading.h2 class="text-xl mb-2">
            Tracking & Cookies Data
    </x-heading.h2>

    <p class="mb-6">
            We use cookies and similar tracking technologies to track the activity on our Service and hold certain information.

    </p>
    <p class="mb-6">
            Cookies are files with small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Tracking technologies also used are beacons, tags, and scripts to collect and track information and to improve and analyze our Service.
    </p>
    <p class="mb-6">
            You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.
    </p>
            Examples of Cookies we use:

    <p class="mb-6">
            Session Cookies: We use Session Cookies to operate our Service.
    </p>

    <p class="mb-6">
            Preference Cookies: We use Preference Cookies to remember your preferences and various settings.
    </p>

    <p class="mb-6">
            Security Cookies: We use Security Cookies for security purposes.
    </p>
    <x-heading.h2 class="text-xl mb-2">
            Customer Data
    </x-heading.h2>

    <p class="mb-6">
            Customer Data may include, without limitation, (a) personal information such as names, and email addresses of your end user customers, potential customers and other users of and visitors to your websites, apps and other properties. Information may be input into the Service by you or collected by the Service using scripts and other code implemented on such properties.
    </p>
    <p class="mb-6">
            We will only process Customer Data for the purposes set forth in your agreement with us for the provisioning of the Service.
    </p>
    <x-heading.h2 class="text-xl mb-2">
            Use of Data
    </x-heading.h2>
    <p class="mb-6">
            {{ config('app.name', 'SaaSykit') }} uses the collected data for various purposes:
    </p>
    <p class="mb-6">
            To provide and maintain our Service
    </p>
    <p class="mb-6">
            To notify you about changes to our Service
    </p>
    <p class="mb-6">
            To allow you to participate in interactive features of our Service when you choose to do so
    </p>
    <p class="mb-6">
            To provide customer support
    </p>
    <p class="mb-6">
            To gather analysis or valuable information so that we can improve our Service
    </p>
    <p class="mb-6">
            To monitor the usage of our Service
    </p>
    <p class="mb-6">
            To detect, prevent and address technical issues
    </p>
    <p class="mb-6">
            To provide you with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless you have opted not to receive such information
    </p>

    <x-heading.h2 class="text-xl mb-2">
            Retention of Data
    </x-heading.h2>

    <p class="mb-6">
            {{ config('app.name', 'SaaSykit') }} will retain your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.
    </p>
    <p class="mb-6">
            {{ config('app.name', 'SaaSykit') }} will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of our Service, or we are legally obligated to retain this data for longer time periods.
    </p>

    <x-heading.h2 class="text-xl mb-2">
            Transfer Of Data
    </x-heading.h2>

    <p class="mb-6">
            Your information, including Personal Data, may be transferred to — and maintained on — computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from your jurisdiction.
    </p>

    <p class="mb-6">
            {{ config('app.name', 'SaaSykit') }} will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal
            Data will take place to an organization or a country unless there are adequate controls in place including the security of your data and other personal information.
    </p>

    <x-heading.h2 class="text-xl mb-2">
            Business Transaction:
    </x-heading.h2>
    <p class="mb-6">
            If {{ config('app.name', 'SaaSykit') }} is involved in a merger, acquisition or asset sale, your Personal Data may be transferred. We will provide notice before your Personal Data is transferred and becomes subject to a different Privacy Policy.
    </p>

    <x-heading.h2 class="text-xl mb-2">
            Disclosure for Law Enforcement:
    </x-heading.h2>
    <p class="mb-6">
            Under certain circumstances, {{ config('app.name', 'SaaSykit') }} may be required to disclose your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).
    </p>

    <x-heading.h2 class="text-xl mb-2">
            Legal Requirements:
    </x-heading.h2>
    <p class="mb-6">
            {{ config('app.name', 'SaaSykit') }} may disclose your Personal Data in the good faith belief that such action is necessary to:
    </p>
    <p class="mb-6">
            To comply with a legal obligation
    </p>
    <p class="mb-6">
            To protect and defend the rights or property of {{ config('app.name', 'SaaSykit') }}
    </p>
    <p class="mb-6">
            To prevent or investigate possible wrongdoing in connection with the Service
    </p>
    <p class="mb-6">
            To protect the personal safety of users of the Service or the public
    </p>
    <p class="mb-6">
            To protect against legal liability
    </p>
    <x-heading.h2 class="text-xl mb-2">
            Security Of Data
    </x-heading.h2>

    <p class="mb-6">
            The security of your data is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.
    </p>

    <x-heading.h2 class="text-xl mb-2">
            “Do Not Track” Signals
    </x-heading.h2>

    <p class="mb-6">
            We do not support Do Not Track (“DNT”). Do Not Track is a preference you can set in your web browser to inform websites that you do not want to be tracked.
    </p>
    <p class="mb-6">
            You can enable or disable Do Not Track by visiting the Preferences or Settings page of your web browser.
    </p>
    <x-heading.h2 class="text-xl mb-2">
            Your Rights
    </x-heading.h2>

    <p class="mb-6">
            {{ config('app.name', 'SaaSykit') }} aims to take reasonable steps to allow you to correct, amend, delete, or limit the use of your Personal Data.
    </p>
    <p class="mb-6">
            Whenever made possible, you can update your Personal Data directly within your account settings section. If you are unable to change your Personal Data, please contact us to make the required changes.
    </p>
    <p class="mb-6">
            If you wish to be informed what Personal Data we hold about you and if you want it to be removed from our systems, please contact us.
    </p>
    <p class="mb-6">
            In certain circumstances, you have the right:
    </p>
    <p class="mb-6">
            To access and receive a copy of the Personal Data we hold about you
    </p>
    <p class="mb-6">
            To rectify any Personal Data held about you that is inaccurate
    </p>
    <p class="mb-6">
            To request the deletion of Personal Data held about you
    </p>
    <p class="mb-6">
            You have the right to data portability for the information you provide to {{ config('app.name', 'SaaSykit') }}. You can request to obtain a copy of your Personal Data in a commonly used electronic format so that you can manage and move it.
    </p>
    <p class="mb-6">
            Please note that we may ask you to verify your identity before responding to such requests.
    </p>

    <x-heading.h2 class="text-xl mb-2">
            Service Providers
    </x-heading.h2>

    <p class="mb-6">
            We may employ third party companies and individuals to facilitate our Service (“Service Providers”), to provide the Service on our behalf, to perform Service-related services or to assist us in analyzing how our Service is used.
    </p>
    <p class="mb-6">
            These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.
    </p>

    <x-heading.h2 class="text-xl mb-2">
            Analytics
    </x-heading.h2>

    <p class="mb-6">
            We may use third-party Service Providers to monitor and analyze the use of our Service.
    </p>
    <x-heading.h3 class="text-lg mb-2">
            Google Analytics:
    </x-heading.h3>

    <p class="mb-6">
            Google Analytics is a web analytics service offered by Google that tracks and reports website traffic. Google uses the data collected to track and monitor the use of our Service. This data is shared with other Google services. Google may use the collected data to contextualize and personalize the ads of its own advertising network.
    </p>
    <p class="mb-6">
            You can opt-out of having made your activity on the Service available to Google Analytics by installing the Google Analytics opt-out browser add-on. The add-on prevents the Google Analytics JavaScript (ga.js, analytics.js, and dc.js) from sharing information with Google Analytics about visits activity.
            For more information on the privacy practices of Google, please visit the Google Privacy & Terms web page.
    </p>

    <x-heading.h3 class="text-lg mb-2">
            Behavioral Remarketing
    </x-heading.h3>

    <p class="mb-6">
            {{ config('app.name', 'SaaSykit') }} uses remarketing services to advertise on third party websites to you after you visited our Service. We and our third-party vendors use cookies to inform, optimize and serve ads based on your past visits to our Service.
    </p>

    <x-heading.h3 class="text-lg mb-2">

            Google AdWords
    </x-heading.h2>

    <p class="mb-6">
            Google AdWords remarketing service is provided by Google Inc.
            You can opt-out of Google Analytics for Display Advertising and customize the Google Display Network ads by visiting the Google Ads Settings page.
            Google also recommends installing the Google Analytics Opt-out Browser Add-on for your web browser. Google Analytics Opt-out Browser Add-on provides visitors with the ability to prevent their data from being collected and used by Google Analytics.
            For more information on the privacy practices of Google, please visit the Google Privacy & Terms web page.
    </p>

        <x-heading.h3 class="text-lg mb-2">

            Facebook
    </x-heading.h2>

    <p class="mb-6">
            Facebook remarketing service is provided by Facebook Inc.
            You can learn more about interest-based advertising from Facebook by visiting this page.
            To opt-out from Facebook’s interest-based ads follow these instructions from Facebook.
            Facebook adheres to the Self-Regulatory Principles for Online Behavioral Advertising established by the Digital Advertising Alliance. You can also opt-out from Facebook and other participating companies through the Digital Advertising Alliance in the USA, the Digital Advertising Alliance of Canada, or the European Interactive Digital Advertising Alliance in Europe, or opt-out using your mobile device settings.
    </p>
    <p class="mb-6">
            For more information on the privacy practices of Facebook, please visit Facebook’s Data Policy.
    </p>

    <x-heading.h2 class="text-xl mb-2">

            Payments
    </x-heading.h2>

    <p class="mb-6">
            We may provide paid products and/or services within the Service. In that case, we use third-party services for payment processing (e.g. payment processors).
            We will not store or collect your payment card details. That information is provided directly to our third-party payment processors whose use of your personal information is governed by their Privacy Policy. These payment processors adhere to the standards set by PCI-DSS as managed by the PCI Security Standards Council, which is a joint effort of brands like Visa, Mastercard, American Express and Discover. PCI-DSS requirements help ensure the secure handling of payment information.
            The payment processor we work with is Stripe. Their Privacy Policy can be viewed here.
    </p>

    <x-heading.h2 class="text-xl mb-2">

            Links To Other Sites
    </x-heading.h2>

    <p class="mb-6">
            Our Service may contain links to other sites that are not operated by us. If you click on a third party link, you will be directed to that third party’s site. We strongly advise you to review the Privacy Policy of every site you visit.
    </p>
    <p class="mb-6">
            We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.
    </p>

    <x-heading.h2 class="text-xl mb-2">
            Security
    </x-heading.h2>

    <p class="mb-6">
            The security of your Personal Information is important to us, and we strive to implement and maintain reasonable, commercially acceptable security procedures and practices appropriate to the nature of the information we store, in order to protect it from unauthorized access, destruction, use, modification, or disclosure.
            However, please be aware that no method of transmission over the internet, or method of electronic storage is 100% secure and we are unable to guarantee the absolute security of the Personal Information we have collected from you.
            You can read more about our data security here.
    </p>

    <x-heading.h2 class="text-xl mb-2">
            Children’s Privacy
    </x-heading.h2>
    <p class="mb-6">
            Our Service does not address anyone under the age of 13 (“Children”).
            We do not knowingly collect personally identifiable information from anyone under the age of 13. If you are a parent or guardian and you are aware that your Children has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from children without verification of parental consent, we take steps to remove that information from our servers.
    </p>
    <x-heading.h2 class="text-xl mb-2">
            Changes To This Privacy Policy
    </x-heading.h2>

    <p class="mb-6">
            We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.
            We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update the “effective date” at the top of this Privacy Policy. You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.
    </p>
    <x-heading.h2 class="text-xl mb-2">
    Contact Us
    </x-heading.h2>

    <p class="mb-6">
        If you have any questions about these Terms, please contact us at <a href="mailto:{{ config('app.support_email', '') }}">{{ config('app.support_email', '') }}</a>.
    </p>


</x-layouts.simple>