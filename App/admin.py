from django.contrib import admin
from .models import About,Cv,SkillModel,ServiceModel , WorkModel , SettingModel,UsersModel , ContactModel
# Register your models here.


admin.site.register(About)
admin.site.register(Cv)
admin.site.register(SkillModel)
admin.site.register(ServiceModel)
admin.site.register(WorkModel)
admin.site.register(SettingModel)
admin.site.register(UsersModel)
admin.site.register(ContactModel)