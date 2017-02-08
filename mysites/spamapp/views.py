from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.

def index(request):
	return render(request,"box.html")

def process_text(request):
	text = request.POST.get("txt")
		# your custom method or you can go ahead here itself to process your text
	import antispam 
	
	check_text = antispam.is_spam(text)
	scr = antispam.score(text) * 100
	cnv_scr = str(scr)


	if(check_text == True):
		result = ("Your message contains " + cnv_scr + "  % spam ")
	else:
		result = "Your message is clean"			
		#print cnv_scr +" % spam "
	return HttpResponse(result)
	
