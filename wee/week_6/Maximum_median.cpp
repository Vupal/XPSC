#include <bits/stdc++.h>
using namespace std;
#define int long long int 
bool check(int m,int k,vector<int>a)
{   int c=0;
int n=a.size();
    for(int i=n/2;i<n;i++)
    {
        if(a[i]<m)
        {
            c+=(m-a[i]);
        }
        
    }
    return c<=k;
}



signed main() {
    int n,k;
    cin>>n>>k;
    vector<int>a(n);
    for(int i=0;i<n;i++)
    {
    cin>>a[i];
    }
    
    sort(a.begin(),a.end());
    
    
    int l=1;
    int ans=-1;
    int h=2e9;
    int m;
    
    while(l<=h)
    {
    m=l+(h-l)/2;
   
    if(check(m,k,a))
    {
        l=m+1;
        ans=m;
        
    }
    else
    {
        h=m-1;
    }
    
        
    }
    
    cout<<ans<<endl;
 
    return 0;
}