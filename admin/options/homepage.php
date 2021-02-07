<?php
$options[] = array( "name" => "Homepage",
						"sicon" => "user-home.png",
                        "type" => "heading");

	$options[] = array( "name" => "Homepage Name",
                        "desc" => "Enter your name for homepage. (ex: Jinu Rajan)",
                        "id" => $shortname."_home_name",
                        "std" => "Jinu Rajan",
                        "type" => "text");

 	$options[] = array( "name" => "Homepage Short Bio Info",
                        "desc" => "Enter your short bio info for homepage. (ex: Hello, I'm Jinu, Senior Backend Developer, working in the field for about 9 years now. I'm 30 years old, married, living in Berlin, Germany.)",
                        "id" => $shortname."_home_teaser",
                        "std" => "Hi, my name is <strong>Jinu Rajan</strong> and I am a passionate <span> polyglot developer </span>.",
                        "type" => "textarea");

    $options[] = array( "name" => "Homepage Email",
                        "desc" => "Enter your email for homepage. (ex: jinu.p.r@gmail.com)",
                        "id" => $shortname."_home_email",
                        "std" => "jinu.p.r@gmail.com",
                        "type" => "text");

 	$options[] = array( "name" => "Homepage Bio Image",
                        "desc" => "Enter your teaser image for homepage. Click to 'Upload' button and upload your teaser image. Recommended size is 300x300px or square proportion.",
                        "id" => $shortname."_home_teaser_image",
                        "std" => "",
                        "type" => "upload");

	$options[] = array( "name" => "Homepage Birthday",
                        "desc" => "Enter your birthday for homepage. (ex: May 31st, 1990)",
                        "id" => $shortname."_home_birthday",
                        "std" => "May 31st, 1990",
                        "type" => "text");

	$options[] = array( "name" => "Homepage Phone",
                        "desc" => "Enter your phone for homepage. (ex: +49 176 25872195)",
                        "id" => $shortname."_home_phone",
                        "std" => "+49 176 25872195",
                        "type" => "text");

    $options[] = array( "name" => "Homepage Address",
                        "desc" => "Enter your biography address. (ex: Guinea Strasse 11, Berlin, 133515)",
                        "id" => $shortname."_home_address",
                        "std" => "Guinea Strasse 11, Berlin, 133515",
                        "type" => "text");

    $options[] = array( "name" => "Homepage Web URL",
                        "desc" => "Enter your web address for homepage. (ex: https://jinurajan.wordpress.com/)",
                        "id" => $shortname."_home_web_url",
                        "std" => "https://jinurajan.wordpress.com/",
                        "type" => "text");


?>