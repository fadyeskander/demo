# Download repository from this link https://github.com/fadyeskander/demo/
# run filter_hotels.php
# to search with with Hotel Name ,Destination [City],Price range:
#filter by hotel namein url ?search_by=hotelname
#ex:filter_hotels.php?search_by=Rotana%20Hotel
#result:
Array ( [name] => Rotana Hotel [price] => 80.6 [city] => cairo [availability] => Array ( [0] => Array ( [from] => 10-10-2020 [to] => 12-10-2020 ) [1] => Array ( [from] => 25-10-2020 [to] => 10-11-2020 ) [2] => Array ( [from] => 05-12-2020 [to] => 18-12-2020 ) ) )

#filter by destination in url:
#ex:filter_hotels.php?search_by=london
#result:
#Array ( [name] => Le Meridien [price] => 89.6 [city] => london [availability] => Array ( [0] => Array ( [from] => 01-10-2020 [to] => 12-10-2020 ) [1] => Array ( [from] => 05-10-2020 [to] => 10-11-2020 ) [2] => Array ( [from] => 05-12-2020 [to] => 28-12-2020 ) ) )
#filter by price in url:
#ex:filter_hotels.php?search_by=111
#result:
Array ( [name] => Novotel Hotel [price] => 111 [city] => Vienna [availability] => Array ( [0] => Array ( [from] => 20-10-2020 [to] => 28-10-2020 ) [1] => Array ( [from] => 04-11-2020 [to] => 20-11-2020 ) [2] => Array ( [from] => 08-12-2020 [to] => 24-12-2020 ) ) )
#filter by Date range in url:
#ex:filter_search/?from=10-10-2020&to=12-10-2020
#result:
Array ( [name] => Rotana Hotel [price] => 80.6 [city] => cairo [availability] => Array ( [0] => Array ( [from] => 10-10-2020 [to] => 12-10-2020 ) [1] => Array ( [from] => 25-10-2020 [to] => 10-11-2020 ) [2] => Array ( [from] => 05-12-2020 [to] => 18-12-2020 ) ) )

#sort by hotel name desc and asc:
#type in url sorty_by=hotelname and order desc or asc -- defualt is asc
ex:filter_search/?sort_by=hotelname&order=desc
#link of codeclimate https://codeclimate.com/github/fadyeskander/demo
$link of travis https://travis-ci.org/fadyeskander/demo
