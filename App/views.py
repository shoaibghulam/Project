from django.shortcuts import render , HttpResponse , redirect
from .models import About,Cv,SkillModel,ServiceModel, WorkModel , SerSkillModel , SerServiceModel , SerWorkModel , SettingModel ,  UsersModel , ContactModel , SerContactModel
from passlib.hash import django_pbkdf2_sha256
from django.core.paginator import Paginator

import json
# Create your views here.

def index(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
   
    if request.method == 'POST':
        try:
            name = request.POST['name']
            profession = request.POST['profession']
            FB = request.POST['fb']
            Twitter = request.POST['Twitter']
            Instgram = request.POST['Instgram']
            linkedlist = request.POST['linkedlist']
            dob = request.POST['DOB']
            Email = request.POST['Email']
            contact = request.POST['contact']
            address = request.POST['address']
            desc = request.POST['desc']
            googlemap = request.POST['map']
            thumb = request.FILES.get('thumb', False)
            updatedata = About.objects.get(AboutId=1)
            updatedata.Name=name
            updatedata.Profession=profession
            updatedata.Fb=FB
            updatedata.Twitter=Twitter
            updatedata.Instgram=Instgram
            updatedata.Linkedlist=linkedlist
            updatedata.Dob=dob 
            updatedata.Email=Email
            updatedata.Contact=contact
            updatedata.Address=address
            updatedata.Description=desc
            updatedata.GoogleMap=googlemap
            if not thumb == False:
                updatedata.ProfileImage=thumb
            updatedata.save()
            return redirect('dashboard')
        except:
            pass
        
    data = About.objects.get(AboutId=1)
    cvinfo=Cv.objects.get(Cvid=1)
    alldata={
        'data':data,
        'cvinfo':cvinfo,


    }
    
    return render(request,'dashboard/dashboard.html',alldata)

# upload cv file    
def Cvdata(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    if request.method == 'POST':
        cvinfo= Cv.objects.get(Cvid=1)
        try:
            cv= request.FILES['cv']
            hirelink= request.POST['hirelink']
            cvinfo.Cvfile=cv
            cvinfo.Hirelink=hirelink
            cvinfo.save()
            return HttpResponse("cv")
        except:
            hirelink= request.POST['hirelink']
            cvinfo.Hirelink=hirelink
            cvinfo.save()
            return HttpResponse("hello world")


# Skills Views
def Skillview(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    return render(request, 'dashboard/skill.html')

# insertskill
def insertskill(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    if request.method =="POST":
        Title =request.POST['Title']
        Position=request.POST['Position']
        data= SkillModel(SkillTitle=Title,SkillPosition=Position)
        data.save()
        return HttpResponse("Success")

#  show skills
def showskill(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    data= SkillModel.objects.all().order_by('SkillTitle')
    serdata = SerSkillModel(data , many=True)
    return HttpResponse(json.dumps(serdata.data))

# delete skill
def skilldelete(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    if request.method =='GET':
        id=request.GET['id']
        data = SkillModel.objects.get(SkillId=id)
        data.delete()
        return HttpResponse("data has been deleted")

#  skill data
def updateskill(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    if request.method == 'GET':
        udata = list()
        id= request.GET['id']
        data=SkillModel.objects.get(SkillId=id)
        serdata = SerSkillModel(data)
        udata.append(serdata.data)
        return HttpResponse(json.dumps(udata))
    elif request.method == 'POST':
        id = request.POST['Id']
        Title= request.POST['Title']
        Position= request.POST['Position']
        data = SkillModel.objects.get(SkillId=id)
        data.SkillTitle= Title
        data.SkillPosition= Position
        data.save()
        return HttpResponse("data has been updated")


# Services views
def Services(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    return render(request, 'dashboard/service.html')

# Insert Service
def InsertService(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    if request.method == 'POST':
        title = request.POST['title']
        desc = request.POST['desc']
        icon = request.POST['icon']
        data = ServiceModel(ServiceTitle = title , ServiceDesc=desc , ServiceIcon=icon)
        data.save()
        return HttpResponse("data has been inserted")

# show service
def Showservice(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    data = ServiceModel.objects.all()
    serdata = SerServiceModel(data , many=True)
    return HttpResponse(json.dumps(serdata.data))
# Delete Services
def Deleteservice(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    if request.method  == 'GET':
        id = request.GET['id']
        data = ServiceModel.objects.get(ServiceId=id)
        data.delete()
        return HttpResponse("data has been deleted")

# update services
def Updateservice(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    if request.method == 'GET':
        udata = list()
        id= request.GET['id']
        data=ServiceModel.objects.get(ServiceId=id)
        serdata = SerServiceModel(data)
        udata.append(serdata.data)
        return HttpResponse(json.dumps(udata))
    elif request.method == 'POST':
        id = request.POST['id']
        title = request.POST['title']
        desc = request.POST['desc']
        icon = request.POST['icon']
        data = ServiceModel.objects.get(ServiceId=id)
        data.ServiceTitle=title
        data.ServiceDesc= desc
        data.ServiceIcon= icon
        data.save()
        return HttpResponse("data has been updated")


# Works View
def Work(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    data = ServiceModel.objects.all()
    return render(request,'dashboard/work.html',{'data':data})

# Work Insert
def WorkInsert(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    if request.method == 'POST':
        try:
            title = request.POST['title']
            link = request.POST['link']
            serviceid = ServiceModel.objects.get(ServiceId=request.POST['service'])
            thumb = request.FILES['thumb']
            data = WorkModel(WorkTitle=title , WorkLink=link , WorkThumbnail =thumb , Serviceid=serviceid)
            data.save()
            return HttpResponse("data has been inserted")
        except:
            title = request.POST['title']
            link = request.POST['link']
            serviceid = ServiceModel.objects.get(ServiceId=request.POST['service'])
            data = WorkModel(WorkTitle=title , WorkLink=link ,  Serviceid=serviceid)
            data.save()
            return HttpResponse("data has been inserted")

# show works
def Showworks(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    data = WorkModel.objects.all().order_by('-Workid')
    sdata = SerWorkModel(data , many=True)
    return HttpResponse(json.dumps(sdata.data))

# delete Workd
def Deletework(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    if request.method == 'GET':
        id= request.GET['id']
        data = WorkModel.objects.get(Workid=id)
        data.delete()
        return HttpResponse("Data Has been Deleted")


# update data
def UpdateData(request , id):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    data = WorkModel.objects.get(Workid=id)
    service=ServiceModel.objects.all()
    alldata={
        'data':data,
        'service':service,
    }
    return render(request,'dashboard/updatework.html',alldata)

#  update datas
def UpdatedData(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    if request.method == 'POST':
        try:
            uid = request.POST['uid']
            title = request.POST['title']
            link = request.POST['link']
            service = ServiceModel.objects.get(ServiceId=request.POST['service'])
            thumb = request.FILES['thumb']
            data = WorkModel.objects.get(Workid=uid)
            data.WorkTitle= title
            data.WorkLink= link
            data.WorkThumbnail= thumb
            data.Serviceid= service
            data.save()
            
        except:
            uid = request.POST['uid']
            title = request.POST['title']
            link = request.POST['link']
            service = ServiceModel.objects.get(ServiceId=request.POST['service'])
            data = WorkModel.objects.get(Workid=uid)
            data.WorkTitle= title
            data.WorkLink= link
            data.Serviceid= service
            data.save()
        return redirect('work')

def Setting(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    if request.method == 'POST':
        data = SettingModel.objects.get(SiteId=1)
        try:
            x="none"
            title = request.POST['title']
            logo = request.FILES.get('logo', False)
            favicon = request.FILES.get('favicon', False)
            desc = request.POST['desc']
            if logo == False and favicon == False:
               
                data.SiteTitle=title
                data.SiteDesc=desc
            elif logo == False:
               
                data.SiteTitle=title
                data.SiteFavicon=favicon
                data.SiteDesc =desc
            elif favicon == False:
               
                data.SiteTitle=title
                data.SiteLogo=logo
                data.SiteDesc= desc
            else:
                data.SiteTitle=title
                data.SiteLogo=logo
                data.SiteDesc= desc
                data.SiteFavicon=favicon

            data.save()
            return redirect('setting')
        except:
            
            return HttpResponse("except")

    site = SettingModel.objects.get(SiteId=1)
    users = UsersModel.objects.get(UserId=1)
    alldata ={
        'data':site,
        'user':users,
    }
    return render(request,'dashboard/setting.html',alldata)

# User Accout 
def Users(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    if request.method == 'POST':
        users = UsersModel.objects.get(UserId=1)
        username = request.POST['username']
        email = request.POST['email']
        password = request.POST['password']
        if password == '':
            users.Username=username
            users.Email=email    
        else:
            hashpwd = django_pbkdf2_sha256.hash(password)
            users.Username=username
            users.Email=email        
            users.Password=hashpwd
        users.save()      
        return redirect('setting')

# Contact View
def Contact(request):

    if not request.session.has_key("username"):
        return redirect('adminlogin')
    data=ContactModel.objects.all().order_by('-ContactId')
    paginator = Paginator(data, 10)
    page = request.GET.get('page', 1)
    userdata = paginator.page(page)
    return render(request,'dashboard/contact.html',{'data':userdata})

# Contact show
def ContactShow(request):
    data=ContactModel.objects.all().order_by('-ContactId')
    paginator = Paginator(data, 10)
    page = request.GET.get('page', 1)
    print(page)
    alldata = paginator.page(page)
    print(alldata.object_list)
    msgdata = SerContactModel(alldata.object_list , many=True)
    return HttpResponse(json.dumps(msgdata.data))
# view message
def Viewmsg(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    if request.method == 'GET':
        msgdata = list()
        id = request.GET['id']

        data = ContactModel.objects.get(ContactId=id)
        data.MarkTime=1
        data.save()
        return HttpResponse(data.ContactMsg)

# Delete message
def Deletemsg(request):
    if not request.session.has_key("username"):
        return redirect('adminlogin')
    if request.method == 'GET':
        id = request.GET['id']
        data = ContactModel.objects.get(ContactId=id)
        
        data.delete()
        return HttpResponse("Data Has been Deleted")




# Public  Pages Views
def Home(request):
    about=About.objects.get(AboutId=1)
    cv= Cv.objects.get(Cvid=1)
    site=SettingModel.objects.get(SiteId=1)
    work = WorkModel.objects.all()
    skill= SkillModel.objects.all()
    service= ServiceModel.objects.all()
   
    alldata={
        'about':about,
        'skill':skill,
        'cv':cv,
        'work':work,
        'site':site,
        'service':service,
    }
    
    return render(request,'public/home.html',alldata) 

# send message
def Sendmessage(request):
    if request.method == 'POST':
        name=request.POST['name']
        email=request.POST['email']
        message=request.POST['message']
        data = ContactModel(ContactName=name , ContactEmail=email, ContactMsg=message)
        data.save()
        return HttpResponse("Message has been Send")

# Login Viewss
def Login(request):

    return render(request,'dashboard/login.html')

# login Process
def LoginProcess(request):
     if request.method=="POST":
        email= request.POST['email']
        password= request.POST['password']
        try:
            data = UsersModel.objects.get(Email=email)
            if data:
                verify= django_pbkdf2_sha256.verify(password, data.Password)
                if verify:
                    request.session['username']=data.Username
                    return HttpResponse("login")
                    
                else:
                    return HttpResponse("Please Enter Correct password")
        except:
             return HttpResponse("Please Enter Correct Email and Password")

def Logout(request):
    if request.session.has_key("username"):
        del request.session['username']
        return redirect('adminlogin')
    else:
        return redirect('adminlogin')