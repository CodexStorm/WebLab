import java.io.*;
import java.net.*;
public class server1{
public static void main(String[] args) throws Exception{
ServerSocket ss=new ServerSocket(6666);
Socket s=ss.accept();
DataInputStream dis=new DataInputStream(s.getInputStream());
while(true)
{

String str=(String)dis.readUTF();
System.out.println("message="+str);
if(str.equals("close"))
{
	ss.close();
break;
}
}

}
}