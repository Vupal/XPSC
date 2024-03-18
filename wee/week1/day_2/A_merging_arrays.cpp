#include <bits/stdc++.h>
using namespace std;
#define ll long long int
void solve()
{
 int n,m;
 cin>>n>>m;
 int a[n+1],b[m+2];
 for(int i=0;i<n;i++) cin>>a[i];
 for(int j=0;j<m;j++) cin>>b[j];
 int l=0,r=0;
 while(l<n){

    while(a[l]>=b[r] && r<m){
       cout<<b[r]<<" ";
       r++;
    }
    cout<<a[l]<<" ";
    l++;
 } 
 while(r<m){
    cout<<b[r]<<" ";
    r++;
 }
 cout<<endl;
}
int main(){

  int t=1;
  while(t--)
  {

    solve();
  }
//cout<<"k";

}