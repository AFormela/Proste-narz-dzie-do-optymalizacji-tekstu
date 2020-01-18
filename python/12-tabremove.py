#!/usr/bin/python
#12 usuwa tabulatory nie dziala 1 akapit...
import re
with open('output.txt', 'w') as f1:
    with open('input.txt', 'r') as f:
	for str in f:
		str = re.sub("\t+", "", str)
		f1.write(str)
	f1.close()
	f.close()
