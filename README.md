# [Selectable Plugin](https://github.com/SaifurRahmanMohsin/oc-selectable-plugin) #
Plugin that demonstrates the selectable column-type in OctoberCMS

## Installation ##

Fire up your terminal and `cd` into your OctoberCMS project folder and paste this:
```
[ -f artisan ] && cd plugins
mkdir -p mohsin && cd $_
wget https://github.com/SaifurRahmanMohsin/oc-selectable-plugin/archive/master.zip
[ -f master ] && unzip master || unzip master.zip && rm $_
mv oc-selectable-plugin-master selectable && cd $_
cd ../../.. && php artisan october:up

```
You have now successfully installed the **Selectable Plugin**.
