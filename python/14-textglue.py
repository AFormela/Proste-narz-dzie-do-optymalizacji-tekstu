#!/usr/bin/python
#14 usuwa tab, spacje oraz new line za 1 razem (pozostawia spacje)
import re
with open('output.txt', 'w') as f1:
    with open('input.txt', 'r') as f:
	for line in f:
		line1 = re.sub(" +", " ",line)
		line2 = line1.strip()
		line3 = line2.replace(" .", ".")
		line3 = re.sub("[\n\t]*", "", line3)
		f1.write(line3)
	f1.close()
	f.close()
