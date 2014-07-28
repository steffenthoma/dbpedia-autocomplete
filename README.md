# DBpedia Autocomplete #

A MySQL 5.6 database based on the DBpedia dataset (http://downloads.dbpedia.org/3.9/ca/labels_ca.nt.bz2) and pagerank dataset (http://people.aifb.kit.edu/ath/pagerank_en_3.9.tsv.bz2).

## Table Description ##

The table entityScoreShort consists of the following columns:

* 'URI': URI of a DBpedia resource
* 'label': first 255 characters of the label used to reference the DBpedia resource
* 'score': calculated pagerank score for the DBpedia resource

The column 'label' is indexed for querying e.g. for autocompletion tasks.

## Example Task ##

entitySearch.html uses JQuery UI Autocomplete (http://jqueryui.com/autocomplete/) for suggesting appropriate entities from the MySQL database. Therefor data.php queries the MySQL database for the top 10 (measured by pagerank score) URIs whose corresponding labels begin with the entered char sequence and returns them to entitySearch.html.
