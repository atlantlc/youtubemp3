<?php

#$red = #"\033[1;31m";
#$green = #"\033[1;32m";
#$blue = #"\033[1;34m";
#$pink = #"\033[1;35m";
#$bluesky = "#\033[1;36m";
system('clear');

$banner2 = "\033[1;32mUpdating default packages \n\n";
echo $banner2;
system('apt update && apt upgrade -y');

echo "\033[1;32mRequesting acces to storage\n";
sleep(2);
echo "\033[1;32mAllow Storage Permission!\n";
sleep(2);
system('termux-setup-storage');
sleep(5);
system('clear');
echo "\033[1;36mInstalling python\n";
system('pkg install python -y');

echo "\033[1;34mInstalling youtube-dl\n";
system('pip install youtube-dl');

echo "\033[1;32mMaking the Youtube Directory to download the Vidoes\n";
system('mkdir ~/storage/shared/Youtube');

echo "\033[1;32mCreating youtube-dl folder for config\n";
system('mkdir -p ~/.config/youtube-dl');

echo "Creating bin folder\n";
system('mkdir ~/bin');

echo "Creating Termux-URL-Opener FILE.\n";
system('mv termux-url-opener ~/bin/');
system('clear');

echo "\n";
echo "\033[1;32mProcess Complete!\n";
echo "\033[1;37m[\033[1;32m+\033[1;37m]\033[1;37m ==========[\033[1;33mMIHAIPRO\033[1;37m]==========\033[1;37m [\033[1;32m+\033[1;37m]\n\n";
