#include <stdio.h>
#include <string.h>

struct PersonData
{
    char name[32];
    char country[64];
    char city[64];
    int age[2];
    char motto[128];
};


int main()
{
    char name[32];
    char country[64];
    char city[64];
    int age[2];
    char motto[128];

    struct PersonData person_data;

    printf("Enter your name: ");
    gets(name);
    strcpy(person_data.name, name);

    printf("Enter your country: ");
    gets(country);
    strcpy(person_data.country, country);

    printf("Enter your city: ");
    gets(city);
    strcpy(person_data.city, city);

    printf("Enter your age: ");
    gets(age);
    strcpy(person_data.age, age);

    printf("Enter your motto: ");
    gets(motto);
    strcpy(person_data.motto,motto);

    FILE *pdata;
    pdata = fopen("personFile.txt","w");
    fprintf(pdata,"Name: %s\n",person_data.name);
    fprintf(pdata,"Country: %s\n",person_data.country);
    fprintf(pdata,"City: %s\n",person_data.city);
    fprintf(pdata,"Age: %s\n",person_data.age);
    fprintf(pdata,"Motto: %s\n",person_data.motto);
    fclose(pdata);

    /* van tutorial overgenomen */
    FILE *ptr_file;
    		char text[1000];

    		ptr_file =fopen("personFile.txt","r");
    		if (!ptr_file)
        		return 1;

    		while (fgets(text,1000, ptr_file)!=NULL)
        		printf("\n%s",text);

		fclose(ptr_file);
    		return 0;

   return 0;
}

