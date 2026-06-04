<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = "Terms of Service";
    $pageDescription = "Terms of Service for " . $common['appName'];
    include '_components/meta.php';
    ?>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; line-height: 1.7; color: #2d3748; background: #f7fafc; min-height: 100vh; }
        .container { max-width: 900px; margin: 0 auto; padding: 2rem 1rem; }
        .page-header { text-align: center; padding: 2rem; background: linear-gradient(135deg, #1a365d 0%, #0B1020 100%); color: white; border-radius: 1rem; margin-bottom: 2rem; }
        .page-header h1 { font-size: 2.75rem; font-weight: 700; margin-bottom: 0.5rem; }
        .page-header p { font-size: 1.25rem; opacity: 0.9; font-weight: 300; }
        .content { background: white; border-radius: 1rem; padding: 3rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); border: 1px solid #e2e8f0; margin-bottom: 2rem; }
        .content h2 { font-size: 1.5rem; font-weight: 700; color: #2d3748; margin: 2.5rem 0 1rem 0; padding-bottom: 0.75rem; border-bottom: 3px solid #1a365d; }
        .content h2:first-child { margin-top: 0; }
        .content h3 { font-size: 1.1rem; font-weight: 600; color: #4a5568; margin: 1.5rem 0 0.75rem 0; }
        .content p { margin-bottom: 1.25rem; line-height: 1.8; color: #4a5568; }
        .content ul { margin: 1rem 0 1.25rem 0; padding-left: 0; }
        .content li { margin-bottom: 0.75rem; line-height: 1.8; position: relative; padding-left: 2rem; color: #4a5568; }
        .content ul li::before { content: '•'; color: #1a365d; font-weight: bold; position: absolute; left: 0; font-size: 1.2rem; }
        .content a { color: #1a365d; text-decoration: none; font-weight: 500; }
        .content a:hover { color: #5a67d8; text-decoration: underline; }
        .content hr { border: none; border-top: 1px solid #e2e8f0; margin: 2rem 0; }
        .effective-date { background: #f7fafc; border: 1px solid #e2e8f0; border-radius: 0.75rem; padding: 1rem 1.5rem; margin-bottom: 2rem; font-style: italic; color: #718096; text-align: center; }
        @media (max-width: 768px) { .container { padding: 1rem 0.5rem; } .content { padding: 2rem 1.5rem; } .page-header h1 { font-size: 2rem; } }
    </style>
</head>

<body>
    <?php include '_components/header.php'; ?>

    <div class="container">
        <div class="page-header">
            <h1>Terms and Conditions</h1>
        </div>

        <div class="content">
            <p class="effective-date"><strong>Effective Date:</strong> August 15, 2025</p>

            <p>Please read these terms and conditions carefully before using our Service.</p>

            <h2>Interpretation and Definitions</h2>

            <h3>Interpretation</h3>
            <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>

            <h3>Definitions</h3>
            <p>For the purposes of these Terms and Conditions:</p>
            <ul>
                <li><strong>Application</strong> means the software program provided by the Company downloaded by You on any electronic device, named <em>Odyssey: Your Bitcoin Journey</em>.</li>
                <li><strong>Application Store</strong> means the digital distribution service operated and developed by Apple Inc. (Apple App Store) or Google Inc. (Google Play Store) in which the Application has been downloaded.</li>
                <li><strong>Affiliate</strong> means an entity that controls, is controlled by or is under common control with a party, where "control" means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</li>
                <li><strong>Country</strong> refers to: Washington, United States.</li>
                <li><strong>Company</strong> (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to <em>Odyssey: Your Bitcoin Journey</em>.</li>
                <li><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</li>
                <li><strong>Service</strong> refers to the Application.</li>
                <li><strong>Terms and Conditions</strong> (also referred as "Terms") mean these Terms and Conditions that form the entire agreement between You and the Company regarding the use of the Service.</li>
                <li><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</li>
            </ul>

            <hr>

            <h2>Acknowledgment</h2>
            <p>These are the Terms and Conditions governing the use of this Service and the agreement that operates between You and the Company. These Terms and Conditions set out the rights and obligations of all users regarding the use of the Service.</p>
            <p>Your access to and use of the Service is conditioned on Your acceptance of and compliance with these Terms and Conditions. These Terms and Conditions apply to all visitors, users and others who access or use the Service.</p>
            <p>By accessing or using the Service You agree to be bound by these Terms and Conditions. If You disagree with any part of these Terms and Conditions then You may not access the Service.</p>
            <p>You represent that you are over the age of 18. The Company does not permit those under 18 to use the Service.</p>

            <hr>

            <h2>User Accounts</h2>
            <p>When You create an account with Us, You must provide accurate, complete, and up-to-date information. You are responsible for maintaining the confidentiality of Your account and password.</p>
            <p>You agree not to use:</p>
            <ul>
                <li>Inappropriate, offensive, or misleading usernames.</li>
                <li>The Service for cheating, fraudulent activity, spamming, harassment, hacking, or any other abusive or unlawful conduct.</li>
                <li>The Service in a way that disrupts or negatively impacts other users' experiences.</li>
            </ul>
            <p>The Company reserves the right to suspend or terminate Your account at any time if You engage in prohibited conduct.</p>

            <hr>

            <h2>In-App Purchases</h2>
            <p>The Application may offer in-app purchases, including but not limited to premium features, digital items, or subscriptions.</p>
            <ul>
                <li>All purchases are final and non-refundable unless required by applicable law.</li>
                <li>You must be at least 18 years old or have parental/guardian consent to make purchases.</li>
                <li>By completing a purchase, You authorize the Application Store to charge Your chosen payment method.</li>
            </ul>

            <hr>

            <h2>Feedback and Suggestions</h2>
            <p>You acknowledge and agree that if You provide feedback, suggestions, or ideas regarding the Application ("Feedback"), the Company may use, modify, and implement such Feedback without any obligation to compensate You or provide acknowledgment.</p>

            <hr>

            <h2>Links to Other Websites</h2>
            <p>Our Service may contain links to third-party web sites or services that are not owned or controlled by the Company. The Company has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services.</p>

            <hr>

            <h2>Termination</h2>
            <p>We may terminate or suspend Your access immediately, without prior notice or liability, for any reason whatsoever, including without limitation if You breach these Terms and Conditions. Upon termination, Your right to use the Service will cease immediately.</p>

            <hr>

            <h2>Limitation of Liability</h2>
            <p>Notwithstanding any damages that You might incur, the entire liability of the Company and any of its suppliers under any provision of this Terms and Your exclusive remedy for all of the foregoing shall be limited to the amount actually paid by You through the Service or 100 USD if You haven't purchased anything through the Service.</p>
            <p>To the maximum extent permitted by applicable law, in no event shall the Company or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever arising out of or in any way related to the use of or inability to use the Service.</p>

            <hr>

            <h2>Governing Law</h2>
            <p>The laws of the Country, excluding its conflicts of law rules, shall govern this Terms and Your use of the Service. Your use of the Application may also be subject to other local, state, national, or international laws.</p>

            <hr>

            <h2>Disputes Resolution</h2>
            <p>If You have any concern or dispute about the Service, You agree to first try to resolve the dispute informally by contacting the Company.</p>

            <hr>

            <h2>Changes to These Terms and Conditions</h2>
            <p>We reserve the right, at Our sole discretion, to modify or replace these Terms at any time. If a revision is material We will make reasonable efforts to provide at least 30 days' notice prior to any new terms taking effect. By continuing to access or use Our Service after those revisions become effective, You agree to be bound by the revised terms.</p>

            <hr>

            <h2>Contact Us</h2>
            <p>If you have any questions about these Terms and Conditions, you can contact us:</p>
            <ul>
                <li>By email: <a href="mailto:<?php echo $common['supportEmail']; ?>"><?php echo $common['supportEmail']; ?></a></li>
            </ul>
        </div>
    </div>

    <?php include '_components/footer.php'; ?>
</body>

</html>
