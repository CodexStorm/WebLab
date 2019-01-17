
public class ImplExample implements Hello
{
public int [] countCharacters(String s) {
	
int arr[]=new int[250];
int i;
for(i=0;i<250;i++)
	arr[i]=0;
for(i=0;i<s.length();i++)
{
		int as=s.charAt(i);
		arr[as]++;
}
return arr;
}
public int add(int a,int b){
	return a+b;
}
public int sub(int a,int b){
	return a-b;
}
public int mul(int a,int b){
	return a*b;
}
public int div(int a,int b){
	return a/b;
}
}