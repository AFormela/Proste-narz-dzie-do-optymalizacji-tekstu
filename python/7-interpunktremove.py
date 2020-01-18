#!/usr/bin/python
#7 usuwa wszystkie znaki interpunkcyjne, moze warto zdef.: def punctuation(string): punctuation=["[","]",",","'"] ???
import re
import string
with open('output.txt', 'w') as f1:
    with open('input.txt', 'r') as f:
	for str in f:
		translator = str.maketrans('', '', string.punctuation)
		l = str.translate(translator)
		f1.write(l)
	f1.close()
	f.close()
