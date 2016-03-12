commands and tools
-------------------

Import Data to the mysql CSV
-----------------------------
mysqlimport  --ignore-lines=1 --fields-terminated-by=, --verbose --local -u root -p rootpass largedata sample_data.csv

