#!/usr/bin/python
#18 wydrukuj wszystkie wyrazy z tekstu w 1 kolumnie
with open('output.txt', 'w') as f1:
	with open('input.txt', 'r') as f:
		for str in f:
			for str in str.split():
			    f1.write(str)
		f1.close()
		f.close()
