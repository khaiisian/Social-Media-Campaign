<!DOCTYPE html>
<html lang="en">

<?php
session_start();
$email = $_SESSION['email'];
include('dbconnect.php');
$sql = "SELECT count(*) as total from member";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_user = $row['total'];
}

$sql1 = "SELECT count(*) as total from services";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    $row = $result1->fetch_assoc();
    $total_services = $row['total'];
}

$sql2 = "SELECT count(*) as total from newsletter";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
    $row = $result2->fetch_assoc();
    $total_newsletter = $row['total'];
}

$sql3 = "SELECT count(*) as total from howparenthelp";
$result3 = $conn->query($sql3);
if ($result3->num_rows > 0) {
    $row = $result3->fetch_assoc();
    $total_pHelp = $row['total'];
}

$sql4 = "SELECT count(*) as total from socialmediaapps";
$result4 = $conn->query($sql4);
if ($result4->num_rows > 0) {
    $row = $result4->fetch_assoc();
    $total_apps = $row['total'];
}

$sql5 = "SELECT count(*) as total from contactus";
$result5 = $conn->query($sql5);
if ($result5->num_rows > 0) {
    $row = $result5->fetch_assoc();
    $total_helps = $row['total'];
}
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Safety Campaign</title>
    <link rel="stylesheet" href="CSS/smcstyle.css">
</head>

<body>
    <?php
    echo $email;
    ?>
    <nav class="admin_nav">
        <ul>
            <div class="logo">
                <img src="images/logo-no-background.png" alt="">
            </div>
            <li class="link"><a href="adminhome.php">Home</a></li>
            <li class="link"><a href="servicesSetup.php">Services</a></li>
            <li class="link"><a href="newsletterSetup.php">NewsLetter</a></li>
            <li class="link"><a href="howparenthelpSetup.php">HowParentHelp</a></li>
            <li class="link"><a href="socialmediaappSetup.php">SocialMediaApps</a></li>
            <li class="link"><a href="contactList.php">Help/Support</a></li>
            <li class="link"><a href="MemberList.php">MemberList</a></li>
            <li class="link"><a href="logout.php">Logout</a></li>
        </ul>

    </nav>

    <main>
        <section id="adminhome">
            <h1 class="dashTitle">Admin Dashboard</h1>

            <div id="dash_content" class="dash_content">
                <div>
                    <img src="images/total_user.png" alt="">
                    <div class="dash_text">
                        <p>
                            <strong>Total Members</strong>
                        </p>
                        <p><strong><?php echo $total_user; ?></strong></p>
                        <a href="MemberList.php">Details</a>
                    </div>
                </div>
                <div>
                    <img src="images/services_admin.png" alt="">
                    <div class="dash_text">
                        <p><strong>Total Services content</strong></p>
                        <p><strong><?php echo $total_services ?></strong></p>
                        <a href="servicesSetup.php#serviceTbl">Details</a>
                    </div>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-newspaper"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z" />
                        <path
                            d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z" />
                    </svg>
                    <div class="dash_text">
                        <p><strong>Total NewsLetter content</strong></p>
                        <p><strong><?php echo $total_newsletter ?></strong></p>
                        <a href="newsletterSetup.php#newsTbl">Details</a>
                    </div>
                </div>
                <div>
                    <img src="images/pHelpIcon.png" alt="">
                    <div class="dash_text">
                        <p><strong>Total HowParentHelp content</strong></p>
                        <p><strong><?php echo $total_pHelp ?></strong></p>
                        <a href="howparenthelpSetup.php#howParentTbl">Details</a>
                    </div>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-app-indicator"
                        viewBox="0 0 16 16">
                        <path
                            d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1z" />
                        <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    </svg>
                    <div class="dash_text">
                        <p><strong>Total SocialMediaApps</strong></p>
                        <p><strong><?php echo $total_apps ?></strong></p>
                        <a href="howparenthelpSetup.php#howParentTbl">Details</a>
                    </div>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-question-circle-fill"
                        viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z" />
                    </svg>
                    <div class="dash_text">
                        <p><strong>Total Help/Support</strong></p>
                        <p><strong><?php echo $total_helps ?></strong></p>
                        <a href="howparenthelpSetup.php#howParentTbl">Details</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer_body">
            <div class="admin_footer">
                <div class="afooter-name">
                    <h1>TeenSafe</h1>
                </div>
                <div class="afooter-content">
                    <div class="footer_link">
                        <h3>Navigation Link</h3>
                        <ul>
                            <li><a href="adminhome.php">Home</a></li>
                            <li><a href="servicesSetup.php">Services</a></li>
                            <li><a href="newsletterSetup.php">Newsletter</a></li>
                            <li><a href="howparenthelpSetup.php">HowParentHelp</a></li>
                            <li><a href="socialmediaappSetup.php">SocialMediaApps</a></li>
                            <li><a href="contactList.php">Help/Support</a></li>
                            <li><a href="MemberList.php">MemberList</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <div class="footer_exploremore">
                        <h3>Admin Record</h3>
                        <ul>
                            <li><a href="servicesSetup.php#serviceTbl">Services Table</a></li>
                            <li><a href="newsletterSetup.php#newsTbl">Newsletter Table</a></li>
                            <li><a href="howparenthelpSetup.php#howParentTbl">HowParentHelp Table</a></li>
                            <li><a href="socialmediaappSetup.php#socialTbl">SocialMediaApps Table</a></li>
                            <li><a href="contactList.php">Help/Support Table</a></li>
                            <li><a href="MemberList.php">MemberList Table</a></li>
                        </ul>
                    </div>
                    <div class="footer_contactUS">
                        <h3>Content</h3>
                        <ul>
                            <li><a href="adminhome.php#dash_content">Admin Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="footer-foot">
            <div class="footersocial">
                <a href="https://www.facebook.com/">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-facebook"
                        viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </a>
                <a href="https://www.youtube.com/">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-youtube"
                        viewBox="0 0 16 16">
                        <path
                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                    </svg>
                </a>
                <a href="https://twitter.com">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-twitter"
                        viewBox="0 0 16 16">
                        <path
                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg>
                </a>
                <a href="https://www.instagram.com">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-instagram"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                </a>
            </div>
            <p>&copy; 2024 Online Safety Campaign</p>
            <p class="curPage">You Are Here: Home</p>
        </div>
    </footer>
</body>

</html>