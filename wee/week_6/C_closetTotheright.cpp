#include <bits/stdc++.h>
using namespace std;
#define ll long long int
int low(int key){


  
}
void solve()
{
   int n,q;
   cin>>n>>q;
   vector<int>v(n),a(n);
   for(int i=0;i<n;i++){
     cin>>v[i];
   }
   //for(int i=0;i<q;i++) cin>>a[i];
   for(int i=0;i<q;i++){
     int l=0,r=n-1,ans=n;
     int key;
     cin>>key;
      while(l<=r){
          int mid=(l+r)/2;
          if(v[mid]>=key){
            ans=mid;
            r=mid-1;
          }
          else l=mid+1;
      }
      cout<<ans+1<<endl;
   }
   

}
int main(){

  int t=1;
  while(t--)
  {

    solve();
  }


}