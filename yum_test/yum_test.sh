#!/bin/bash
#read -p "Please enter the repos ip :" ipaddr
#read -p "Please enter the password :" passwd
ipaddr=$(cat info.txt| awk '{print $1}')
passwd=$(cat info.txt| awk '{print $2}')



cp template template.repo
sed "s/IPADDR/$ipaddr/g"  -i template.repo 

sshpass -p "$passwd" ssh-copy-id -o StrictHostKeyChecking=no  root@$ipaddr &> /dev/null 




scp template.repo root@172.16.1.134:/etc/yum.repos.d/ &> /dev/null

sshpass -p "$passwd"  ssh root@$ipaddr "bash -s" < template.sh
