from django.db import models
from rest_framework import serializers
# Create your models here.
class About(models.Model):
    AboutId=models.AutoField(primary_key=True)
    Name = models.CharField(max_length=200 , default="Name")
    Profession = models.CharField(max_length=200 , default="Name")
    ProfileImage=models.ImageField(upload_to="profile", default="Profile")
    Fb=models.CharField(max_length=200 , default="Name")
    Twitter=models.CharField(max_length=200 , default="Name")
    Instgram=models.CharField(max_length=200 , default="Name")
    Linkedlist=models.CharField(max_length=200 , default="Linkdin")
    Description= models.TextField(max_length=3000 , default="Description")
    Dob= models.CharField(max_length=200 , default="Dob")
    Email = models.CharField(max_length=200 , default="Email")
    Contact=models.CharField(max_length=200 , default="Contact")
    Address=models.CharField(max_length=200 , default="Address")
    GoogleMap= models.TextField(max_length=4000 , default="Description")
    def __str__(self):
        return self.Name


# Cv link
class Cv(models.Model):
    Cvid = models.AutoField(primary_key=True)
    Cvfile=models.FileField(upload_to='cv' ,default="cv.pdf")
    Hirelink =models.CharField(max_length=200 , default="Hire link")
    def __str__(self):
        return self.Hirelink

class SkillModel(models.Model):
    SkillId = models.AutoField(primary_key=True)
    SkillTitle =models.CharField(max_length=200 , default="SKill Title")
    SkillPosition =models.CharField(max_length=200 , default=" Position ")
    def __str__(self):
        return self.SkillTitle
    

# Services model
class ServiceModel(models.Model):
    ServiceId = models.AutoField(primary_key=True)
    ServiceTitle = models.CharField(max_length=200 , default="Service Title")
    ServiceDesc = models.CharField(max_length=200 , default="Description")
    ServiceIcon = models.CharField(max_length=200 , default="Service Icon Class")
    def __str__(self):
        return self.ServiceTitle


#  Work Model
class WorkModel(models.Model):
    Workid=models.AutoField(primary_key=True)
    WorkTitle= models.CharField(max_length=200 , default="Work Title")
    WorkLink= models.CharField(max_length=200 , default="Service Title")
    WorkThumbnail=models.ImageField(upload_to='works', default="work.jpg")
    Serviceid=models.ForeignKey(ServiceModel,  on_delete=models.CASCADE)
    def __str__(self):
        return self.WorkTitle

# settings Model
class SettingModel(models.Model):
    SiteId =models.AutoField(primary_key=True)
    SiteTitle = models.CharField(max_length=200 , default="Site Title")
    SiteLogo = models.ImageField(upload_to='site/',default='work.jpg')
    SiteFavicon =  models.ImageField(upload_to='site/',default='work.jpg')
    SiteDesc = models.TextField(max_length=200 , default="Site Description")
    def __str__(self):
        return self.SiteTitle
    

class UsersModel(models.Model):
    UserId = models.AutoField(primary_key=True)
    Username = models.CharField(max_length=60 , default="Username")
    Email = models.CharField(max_length=100 , default="Email")
    Password = models.TextField(max_length=3000 , default="Password")
    def __str__(self):
        return self.Username
    
class ContactModel(models.Model):
    ContactId=models.AutoField(primary_key=True)
    ContactName=models.CharField(max_length=100 , default="Name")
    ContactEmail=models.CharField(max_length=100 , default="Name")
    ContactMsg=models.TextField(max_length=3000 , default="Message")
    MarkTime= models.IntegerField(default=0)
    def __str__(self):
        return self.ContactName
    
    

# Serilzer Data
class SerSkillModel(serializers.ModelSerializer):
    
    class Meta:
        model = SkillModel
        fields = '__all__'
# Service Serlizer 
class SerServiceModel(serializers.ModelSerializer):
    class Meta:
        model = ServiceModel
        fields = '__all__'

# Work Serlizer
class SerWorkModel(serializers.ModelSerializer):
   
    class Meta:
        model = WorkModel
        fields = '__all__'
# Work Serlizer
class SerContactModel(serializers.ModelSerializer):
    class Meta:
        model =ContactModel
        fields = '__all__'