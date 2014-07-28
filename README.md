# DBpedia entity scores MySQL 5.6 #

A MySQL database based on the DBpedia dataset (http://downloads.dbpedia.org/3.9/ca/labels_ca.nt.bz2) and pagerank dataset (http://people.aifb.kit.edu/ath/pagerank_en_3.9.tsv.bz2).

## Table Description ##

The table entityScoreShort consists of the following columns:

* URI: URI of a DBpedia resource
* label: first 255 characters of the label used to reference the DBpedia resource
* score: calculated pagerank score for the DBpedia resource

The column 'label' is indexed for querying e.g. for autocompletion tasks.

## Example Task ##

This database can be used for entity retrieval (URIs) from text based on a comparison with the used labels. 
