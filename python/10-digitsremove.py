#!/usr/bin/python
#10 usuwanie cyfr (dziala tylko 2-a czesc tekstu). sprawdzic, czy dziala na tekscie bez linii przerwy...
import re
with open('output.txt', 'w') as f1:
    with open('input.txt', 'r') as f:
	for str in f:
		str = re.sub("\d+", "", str)
		f1.write(str)
	f1.close()
	f.close()
