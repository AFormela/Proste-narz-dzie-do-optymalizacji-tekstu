#!/usr/bin/python
#15 Dodanie spacji po każdej kropce w momencie, gdy jej brak
import re
with open('output.txt', 'w') as f1:
    with open('input.txt', 'r') as f:
	for line in f:
		line = re.sub(r'(?<=[.,])(?=[^\s])', r' ', line)
		f1.write(line)
	f1.close()
	f.close()
