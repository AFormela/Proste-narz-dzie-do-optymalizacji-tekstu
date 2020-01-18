#!/usr/bin/python
#13 usuwa tab, spacje oraz new line za 1 razem (uwaga nie zostawia zadnej spacji)
import re
with open('output.txt', 'w') as f1:
    with open('input.txt', 'r') as f:
	for str in f:
		str = re.sub("[\n\t\s]*", "", str)
		f1.write(str)
	f1.close()
	f.close()
