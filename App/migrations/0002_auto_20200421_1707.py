# Generated by Django 3.0.5 on 2020-04-21 12:07

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('App', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='about',
            name='Dob',
            field=models.CharField(default='Dob', max_length=200),
        ),
    ]
