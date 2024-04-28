#include <bits/stdc++.h>
using namespace std;
#define ll long long int
const ll N=2e5+5;
ll n,k;
ll v[N];
//vector<ll>v(200009,0);
  
bool can(ll mid){
    ll sum=0;
    for(ll i=n/2;i<n;i++){
      sum+=max(0LL,mid-v[i]);
      if(sum>k) return 0;  
    }
    return sum<=k;
}
void solve()
{
  ios_base::sync_with_stdio(0);cin.tie(0);cout.tie(0);
  cin>>n>>k;
 for(ll i=0;i<n;i++) cin>>v[i];
  sort(v,v+n);
 // sort(v.begin(),v.end());
  ll l=n/2,r=1e16,ans=v[n/2];
  while(l<=r){
     ll mid=(l+r)/2;
     if(can(mid)){
       ans=mid;
       l=mid+1;
     }
     else r=mid-1;
  }  
 cout<<ans;

}
signed main(){

  int t=1;
  while(t--)
  {

    solve();
  }


}
   