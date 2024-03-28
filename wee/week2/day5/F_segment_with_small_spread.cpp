#include <bits/stdc++.h>
using namespace std;
#define ll long long int
void solve()
{
  
  ll n,k; cin>>n>>k;
  ll a[n+1];
  for(int i=0;i<n;i++){
    cin>>a[i];
  }
  ll r=0,l=0;
  multiset<ll>ml;
  ll mx=0,mn=0,ans=0;
  while(r<n){
   ml.insert(a[r]);
   mx=*ml.rbegin();
   mn=*ml.begin();
   if(mx-mn<=k){
    ans+=r-l+1;
    //cout<<ans<<endl;
    //r++;
   }
   
   else{
    while(mx-mn>k && l<r){
       auto it=ml.find(a[l]);
       ml.erase(it);
       l++;
       mx=*ml.rbegin();
       mn=*ml.begin();
    }
    
    if(mx-mn<=k){
     ans+=r-l+1;
    }
   // r++;


  }
 r++;
     
  }
  cout<<ans<<endl;
  
  // ml.insert(5);
  // ml.insert(2);
  // ml.insert(5);
  // ml.erase(2);
  // cout<<*ml.begin()<<endl;
  

}
int main(){

  int t=1;
  while(t--)
  {

    solve();
  }


}