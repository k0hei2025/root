
import java.applet.*;
import java.awt.*;
import java.util.*;
 
/*
<APPLET CODE = "Animate2" WIDTH = 350 HEIGHT = 350>
<PARAM NAME = fps VALUE = 35>
</APPLET>
*/
 
public class Animate2 extends Applet implements Runnable 
{
 int frame = 1;
 int delay;
 Thread animator1;
    
 //Compute the delay between frames.
     
   public void init() 
   {
    String str = getParameter("fps");
    int fps = (str != null) ? Integer.parseInt(str) : 10;
    delay = (fps > 0) ? (1000 / fps) : 100;
   }
 
 /* 
  * This method is called when the applet becomes visible on
  * the screen. Create a thread and start it.
  */
 
    public void start() 
    {
     animator1 = new Thread(this);
     animator1.start();
    }
 
 /*
  * This method is called by the thread that was created in
  * the start method. It does the main animation.
  */
 
    public void run() 
    {
     //Remember the starting time
 
     long tm = System.currentTimeMillis();
 
     while(Thread.currentThread() == animator1) 
     {
      //Display the next frame of animation.
 
      repaint();
         
      //Delay for a while
 
      try
      {
       tm += delay;
       Thread.sleep(Math.max(0, tm - System.currentTimeMillis()));
      } 
      catch(InterruptedException e) 
      {
       break;
      }
 
      //Advance the frame
 
      frame++;
     }
    }
 
    public void paint(Graphics g) 
    {
     g.fillOval(30 + frame, 40 + frame, 45, 45);
    }
 
 /*
  * This method is called when the applet is no longer
  * visible. Set the animator variable to null so that the
  * thread will exit before displaying the next frame.
  */
 
    public void stop() 
    {
     animator1 = null;
    }
}