#include <bits/stdc++.h>
using namespace std;
#define ll long long int
int high(int key,vector<int>&v,int n){
  int l=0,r=n-1,ans=-1;
 while(l<=r){
          int mid=(l+r)/2;
          if(v[mid]<=key){
            ans=mid;
            l=mid+1;
          }
          else {
             r=mid-1;
          }
      }
      return ans+1;
   }
int low(int key,vector<int>&v,int n){
  int l=0,r=n-1,ans=n;
 while(l<=r){
          int mid=(l+r)/2;
          if(v[mid]>=key){
            ans=mid;
            r=mid-1;
          }
          else {
             l=mid+1;
          }
      }
      return ans+1;
   }


void solve()
{
   int n,q;
   cin>>n;
   vector<int>v(n);
   for(int i=0;i<n;i++){
     cin>>v[i];
   }
   //for(int i=0;i<q;i++) cin>>a[i];
   sort(v.begin(),v.end());
   //int q;
   cin>>q;
   for(int i=0;i<q;i++){
     
     int key,key1;
     cin>>key>>key1;
     ll lv=low(key,v,n);
     ll hv=high(key1,v,n);
     cout<<hv-lv+1<<" ";
   }   
   cout<<endl;
}
int main(){

  int t=1;
  while(t--)
  {

    solve();
  }


}