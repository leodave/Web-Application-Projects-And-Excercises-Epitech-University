 import java.util.ArrayList;

 public class SentenceComposite implements ISentence {
     private ArrayList<ISentence> childSentence = new ArrayList<ISentence>();
     @Override
     public void print(){
         for( int f = 0; f < childSentence.size(); f++){
            childSentence.get(f).print();
         }
     }
     public void add (ISentence objSentence) {
      childSentence.add(objSentence);
      //System.out.println(childSentence);
     }
      public void remove (ISentence objSentence) {
      childSentence.remove(objSentence);
     }
 }