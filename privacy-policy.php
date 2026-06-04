<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = "Privacy Policy";
    $pageDescription = "Privacy Policy for " . $common['appName'];
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
        .effective-date { background: #f7fafc; border: 1px solid #e2e8f0; border-radius: 0.75rem; padding: 1rem 1.5rem; margin-bottom: 2rem; font-style: italic; color: #718096; text-align: center; }
        @media (max-width: 768px) { .container { padding: 1rem 0.5rem; } .content { padding: 2rem 1.5rem; } .page-header h1 { font-size: 2rem; } }
    </style>
</head>

<body>
    <?php include '_components/header.php'; ?>

    <div class="container">
        <div class="page-header">
            <h1>Privacy Policy</h1>
        </div>

        <div class="content">
            <p class="effective-date"><strong>Effective Date:</strong> August 15, 2025</p>

            <h2>Introduction</h2>
            <p>Welcome to Odyssey: Your Bitcoin Journey (the "App"). Odyssey ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, and share your personal information when you use our App.</p>

            <h2>Information We Collect</h2>

            <h3>1. Information You Provide</h3>
            <ul>
                <li><strong>Account Information:</strong> When you sign up for our App, we may collect your name, email address, and other contact information.</li>
                <li><strong>User Content:</strong> We may collect any content you upload, post, or otherwise transmit through the App, including messages, photos, and other media.</li>
            </ul>

            <h3>2. Information We Collect Automatically</h3>
            <ul>
                <li><strong>Usage Data:</strong> We collect information about your interactions with the App, such as the features you use and the time spent on the App.</li>
                <li><strong>Device Information:</strong> We collect information about the device you use to access the App, including IP address, device type, and operating system.</li>
            </ul>

            <h3>3. Information from Third Parties</h3>
            <ul>
                <li><strong>Third-Party Services:</strong> If you connect to the App through a third-party service (e.g., social media), we may collect information from that service as permitted by their privacy policies.</li>
            </ul>

            <h2>How We Use Your Information</h2>
            <p>We may use the information we collect for the following purposes:</p>
            <ul>
                <li><strong>To Provide and Maintain Our Service:</strong> We use your information to operate and improve the App.</li>
                <li><strong>To Communicate with You:</strong> We may use your contact information to send you updates, notifications, and other communications related to the App.</li>
                <li><strong>To Personalize Your Experience:</strong> We may use your information to personalize your experience and offer content tailored to your interests.</li>
                <li><strong>For Analytics and Research:</strong> We use the information to analyze how our users interact with the App and to improve our services.</li>
            </ul>

            <h2>Sharing Your Information</h2>
            <p>We do not share your personal information with third parties except in the following circumstances:</p>
            <ul>
                <li><strong>With Your Consent:</strong> We may share your information with third parties if you give us explicit consent to do so.</li>
                <li><strong>Service Providers:</strong> We may share your information with third-party service providers who perform services on our behalf.</li>
                <li><strong>Legal Requirements:</strong> We may disclose your information if required by law, or if we believe that such action is necessary to comply with legal obligations, protect our rights, or prevent fraud.</li>
            </ul>

            <h2>Your Rights and Choices</h2>
            <ul>
                <li><strong>Access and Correction:</strong> You have the right to access and correct the personal information we hold about you.</li>
                <li><strong>Data Deletion:</strong> You may request that we delete your personal information by contacting us at <a href="mailto:<?php echo $common['supportEmail']; ?>"><?php echo $common['supportEmail']; ?></a>.</li>
                <li><strong>Opt-Out:</strong> You may opt out of receiving promotional communications from us by following the instructions in those communications.</li>
            </ul>

            <h2>Security</h2>
            <p>We take reasonable measures to protect your personal information from unauthorized access, use, or disclosure. However, no security system is completely secure, and we cannot guarantee the absolute security of your information.</p>

            <h2>Changes to This Privacy Policy</h2>
            <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Effective Date" above. Your continued use of the App after such changes signifies your acceptance of the revised Privacy Policy.</p>

            <h2>Contact Us</h2>
            <p>If you have any questions about this Privacy Policy, you can contact us:</p>
            <ul>
                <li>By email: <a href="mailto:<?php echo $common['supportEmail']; ?>"><?php echo $common['supportEmail']; ?></a></li>
            </ul>
        </div>
    </div>

    <?php include '_components/footer.php'; ?>
</body>

</html>
